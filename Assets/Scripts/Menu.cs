using UnityEngine;
using System.Collections;

public class Menu : MonoBehaviour 
{
	public GUISkin mySkin;
	//string startString = "";
	bool inputReceived = false;
	private GameManager gameManager;
	// Use this for initialization
	void Start () 
	{
		gameManager = GameObject.FindGameObjectWithTag("GameController").GetComponent<GameManager>();
		#if UNITY_STANDALONE || UNITY_EDITOR
		// = "Click to Start";
		#else
		//Input.simulateMouseWithTouches = true;
		//startString = "Tap to Start";
		#endif
	}
	
	// Update is called once per frame
	void Update () 
	{
		if(GameManager.gameState != GameManager.GameState.InGame)
		{
			#if UNITY_STANDALONE || UNITY_EDITOR
			if(Input.GetMouseButtonDown(0))
			{
				inputReceived = true;
			}
			#else
			if(Input.touchCount > 0)
			{
				inputReceived = true;
			}
			#endif

			if(inputReceived)
			{
				switch(GameManager.gameState)
				{
				case GameManager.GameState.InGame:
					break;
				case GameManager.GameState.Menu:
					//gameManager.BroadcastMessage("StartGame");
					break;
				case GameManager.GameState.Score:
					//gameManager.BroadcastMessage("StartGame");
					break;
				}
				inputReceived = false;
			}
		}
		if(Debug.isDebugBuild)
		{
			if(Input.GetKeyDown(KeyCode.P))
				TakeScreenshot();
		}
	}
	public static int startNumber = 1;
	static void TakeScreenshot()
	{
		int number = startNumber;
		string name = "" + number;
		
		while (System.IO.File.Exists("Screen" + name + ".png"))
		{
			number++;
			name = "" + number;
		}
		
		startNumber = number + 1;
		
		Application.CaptureScreenshot("Screen" + name + ".png");
	}
	private bool showHint = false;
	public void ShowHint(bool show)
	{
		showHint = !show;
	}
	string mag = "10";
	private bool showInstructions = true;
	void OnGUI()
	{
		mySkin.label.fontSize = (int)(Screen.height * 0.0334f);
		mySkin.button.fontSize = (int)(Screen.height * 0.0334f);
		
		GUI.skin = mySkin;
		float buttonHeight = Screen.height * 0.1f;
		float buttonWidth = Screen.height * 0.2f;

		float labelHeight = (Screen.height * 0.05f);
		float labelWidth = (Screen.height * 0.3f);

		float label2Height = (Screen.height * 0.15f);
		float label2Width = (Screen.height * 0.5f);
		
			
		switch(GameManager.gameState)
		{
		case GameManager.GameState.Menu:
			#if UNITY_STANDALONE || UNITY_EDITOR
			if(showInstructions)
			{
				//GUI.Label(new Rect((Screen.width - labelWidth) * 0.032f, (Screen.height - labelHeight) * 0.32f, labelWidth, labelHeight), "Up");
				//GUI.Label(new Rect((Screen.width - labelWidth) * 0.02f, (Screen.height - labelHeight) * 0.69f, labelWidth, labelHeight), "Down");
			}
			#endif

			if(GUI.Button(new Rect((Screen.width - buttonWidth) * 0.5f, (Screen.height - buttonHeight) * 0.45f, buttonWidth, buttonHeight), "Start"))
			{
				showInstructions = false;
				gameManager.BroadcastMessage("StartGame");                           
			}
			#if !UNITY_ANDROID
			if(GUI.Button(new Rect((Screen.width - buttonWidth) * 0.5f, (Screen.height - buttonHeight) * 0.55f, buttonWidth, buttonHeight), "Exit"))
			{
				Application.Quit();
			}
			#endif
			break;


		case GameManager.GameState.InGame:
			GUI.color = Color.black;
			GUI.Label(new Rect((Screen.width - labelWidth) * 0.01f, (Screen.height - labelHeight) * 0.07f, labelWidth, labelHeight), "Score: " + gameManager.ObstaclesPast);
			GUI.Label(new Rect((Screen.width - labelWidth) * 0.01f, (Screen.height - labelHeight) * 0.11f, labelWidth, labelHeight), "High Score: " + HighScore.Highscore);
			break;

		case GameManager.GameState.Score:

			float scoreLabelHeight = (Screen.height * 0.2f);
			float scoreLabelWidth = (Screen.height * 0.5f);

			float highScoreLabelHeight = (Screen.height * 0.05f);
			float highScoreLabelWidth = (Screen.height * 0.5f);

			// Score
			mySkin.label.fontSize = (int)(Screen.height * 0.1f);
			GUI.Label(new Rect((Screen.width - scoreLabelWidth) * 0.5f, (Screen.height - scoreLabelHeight) * 0.3f, scoreLabelWidth, scoreLabelHeight), "Score: " + gameManager.ObstaclesPast);

			// HighScore
			mySkin.label.fontSize = (int)(Screen.height * 0.0334f);
			GUI.Label(new Rect((Screen.width - highScoreLabelWidth) * 0.5f, (Screen.height - highScoreLabelHeight) * 0.4f, highScoreLabelWidth, highScoreLabelHeight), "High Score: " + HighScore.Highscore);

			if(GUI.Button(new Rect((Screen.width - buttonWidth) * 0.4f, (Screen.height - buttonHeight) * 0.5f, buttonWidth, buttonHeight), "Start"))
			{
				gameManager.BroadcastMessage("StartGame"); 
			}
			if(GUI.Button(new Rect((Screen.width - buttonWidth) * 0.6f, (Screen.height - buttonHeight) * 0.5f, buttonWidth, buttonHeight), "Menu"))
			{
				showInstructions = true;
				GameManager.gameState = GameManager.GameState.Menu;
				gameManager.BroadcastMessage("ShowPlayer");
			}
			if(showHint)
			{
				GUI.Label(new Rect((Screen.width - label2Width) * 0.5f, (Screen.height - label2Height) * 0.85f, label2Width, label2Height), "Hint: Hold down right side of screen to slow time. Energy remaining on top left of screen.");
			}

			break;
		}
	}
}