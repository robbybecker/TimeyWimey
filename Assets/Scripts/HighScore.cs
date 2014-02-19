using UnityEngine;
using System.Collections;
using System.Collections.Generic;
using System.IO.IsolatedStorage;
using System.IO;

public class HighScore
{
	public static readonly string HighScoreFilename = "highscore.dat";

	private static int highscore;

	public static int Highscore {
		get {
			return highscore;
		}
		set {
			highscore = value;
		}
	}

	public static void CheckHighScore(int score)
	{
		if(score > highscore)
		{
			highscore = score;
			SaveTheScore(highscore);
		}
	}

	public static void SaveTheScore(int score)
	{
#if UNITY_STANDALONE || UNITY_EDITOR
		string fullpath = Path.Combine(Application.dataPath, HighScoreFilename);
#elif UNITY_IPHONE
		string path = Application.dataPath.Substring (0, Application.dataPath.Length - 5); 
		path = path.Substring(0, path.LastIndexOf('/'));  
		string fullpath = path + "/Documents/"+HighScoreFilename; 
#elif UNITY_ANDROID
		string fullpath = Path.Combine(Application.persistentDataPath , HighScoreFilename);	
#endif
		while(FileInUse(fullpath))
		{
		   Debug.Log("File is in use");
		}		  		
	    // Get the path of the save game
		using (FileStream fs = new FileStream(fullpath, FileMode.Create))
        {
			// Create the writer for data.
	        using(BinaryWriter bw = new BinaryWriter(fs))
			{
				try
				{		
					bw.Write(score);
		   			//Debug.Log("Save");
					
				}	
				catch(EndOfStreamException e)
		        {	
						Debug.Log("{0} caught and ignored. " + "Using default values."+ e.Message);
				}
				finally
		        {
		        	bw.Close();
		        }
			}
			fs.Dispose();
		}
	}
	
	public static int LoadTheScore()
	{	 
#if UNITY_STANDALONE || UNITY_EDITOR
		string fullpath = Path.Combine(Application.dataPath, HighScoreFilename);
#elif UNITY_IPHONE
		string path = Application.dataPath.Substring (0, Application.dataPath.Length - 5); 
		path = path.Substring(0, path.LastIndexOf('/'));  
		string fullpath = path + "/Documents/"+HighScoreFilename; 
#elif UNITY_ANDROID
		string fullpath = Path.Combine(Application.persistentDataPath , HighScoreFilename);		
#endif		
		using (FileStream fs = new FileStream(fullpath, FileMode.OpenOrCreate, FileAccess.Read))
        {
            using (BinaryReader br = new BinaryReader(fs))
            {	
				try
				{		
					highscore = br.ReadInt32();		
					//Debug.Log("Highscore " + highscore);
				}
				catch(EndOfStreamException e)
		        {	
						Debug.Log("{0} caught and ignored. " + "Using default values."+ e.Message+" "+e.StackTrace);
				}
				finally
		        {
		        	br.Close();
		        }
			}
			fs.Dispose();
		}
		return (highscore);
	}
	
	/*public void Initialize()
	{
#if UNITY_STANDALONE || UNITY_EDITOR
	    	string fullpath = Path.Combine(Application.dataPath, HighScoreFilename);
#elif UNITY_IPHONE
		string path = Application.dataPath.Substring (0, Application.dataPath.Length - 5); 
		path = path.Substring(0, path.LastIndexOf('/'));  
		string fullpath = path + "/Documents/"+HighScoreFilename; 
#elif UNITY_ANDROID
		string fullpath = Path.Combine(Application.persistentDataPath , HighScoreFilename);		
#endif
	 
	    // Check to see if the save exists
	    if (!File.Exists(fullpath))
	    {
			highscore = 0;
	 
	       	SaveTheScore(highscore);
	    }
	}*/
	
	static bool FileInUse(string path)
	{
        try
        {
            using (FileStream fs = new FileStream(path, FileMode.OpenOrCreate))
            {
                if(fs.CanWrite)
					return false;
            }   
        }
        catch (IOException ex)
        {
			Debug.Log(ex.ToString());
            return true;
        }
		return false;
	}	
}