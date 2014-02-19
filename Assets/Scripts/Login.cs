using UnityEngine;
using System.Collections;

public class Login : MonoBehaviour {

	// Use this for initialization
	void Start () {
	
	}
	
	// Update is called once per frame
	void Update () {
	
	}

	private string formName = ""; //this is the field where the player will put the name to login	
	private string formPassword = ""; //this is his password	
	string formText = ""; //this field is where the messages sent by PHP script will be in			
	string URL = "../check_scores.php"; //change for your URL	
	string hash = "hashcode"; //change your secret code, and remember to change into the PHP file too

	private Rect textrect = new Rect (10, 150, 500, 500); //just make a GUI object rectangle
	
	void OnGUI() 
	{
		GUI.Label(new Rect (10, 10, 80, 20), "Your name:" ); //text with your nick
		GUI.Label(new Rect (10, 30, 80, 20), "Your pass:" );		
		
		formName = GUI.TextField (new Rect (90, 10, 100, 20), formName ); //here you will insert the new value to variable formNick
		formPassword = GUI.TextField (new Rect (90, 30, 100, 20), formPassword ); //same as above, but for password	
		
		if ( GUI.Button (new Rect (10, 60, 100, 20) , "Try login" ) )
		{ 
			StartCoroutine(DoLogin());
		}
		
		GUI.TextArea( textrect, formText );	
	}

	IEnumerator DoLogin() 
	{	
		WWWForm form = new WWWForm(); //here you create a new form connection
		form.AddField( "myform_hash", hash ); //add your hash code to the field myform_hash, check that this variable name is the same as in PHP file
		form.AddField( "myform_nick", formName );
		form.AddField( "myform_pass", formPassword );
		
		WWW w = new WWW(URL, form); //here we create a var called 'w' and we sync with our URL and the form
		
		yield return w; //we wait for the form to check the PHP file, so our game dont just hang
		
		if (w.error != null) 
		{
			print(w.error); //if there is an error, tell us
			
		} 
		else 
		{		
			print("Test ok");
			formText = w.text; //here we return the data our PHP told us
			w.Dispose(); //clear our form in game
		}
		formName = ""; //just clean our variables
		formPassword = "";
	}
}