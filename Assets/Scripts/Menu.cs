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
	}
	string mag = "10";
	void OnGUI()
	{
		mySkin.label.fontSize = (int)(Screen.height * 0.0334f);
		mySkin.button.fontSize = (int)(Screen.height * 0.0334f);
		
		GUI.skin = mySkin;
		float buttonHeight = Screen.height * 0.075f;
		float buttonWidth = Screen.height * 0.15f;

		float labelHeight = (Screen.height * 0.05f);
		float labelWidth = (Screen.height * 0.3f);

		
		switch(GameManager.gameState)
		{
		case GameManager.GameState.Menu:
			if(GameManager.gameState == GameManager.GameState.Menu)
			{
				mag = GUI.TextField(new Rect((Screen.width - 100f) * 0.5f, (Screen.height - 25f) * 0.3f, 100, 25f), mag);
				if(float.TryParse(mag, out Player.theMag))
					Player.theMag = float.Parse(mag);
			}
			if(Debug.isDebugBuild)
			{
				if(Application.loadedLevelName == "game")
				{
					if(GUI.Button(new Rect((Screen.width - buttonWidth) * 1f, (Screen.height - buttonHeight) * 0.1f, buttonWidth, buttonHeight), "Test"))
					{
						Application.LoadLevel("test");                        
					}
				}
				else if(Application.loadedLevelName == "test")
				{
					if(GUI.Button(new Rect((Screen.width - buttonWidth) * 1f, (Screen.height - buttonHeight) * 0.1f, buttonWidth, buttonHeight), "Game"))
					{
						Application.LoadLevel("game");                                                
					}
				}
			}

			if(GUI.Button(new Rect((Screen.width - buttonWidth) * 0.5f, (Screen.height - buttonHeight) * 0.45f, buttonWidth, buttonHeight), "Start"))
			{
				gameManager.BroadcastMessage("StartGame");                           
			}
			if(GUI.Button(new Rect((Screen.width - buttonWidth) * 0.5f, (Screen.height - buttonHeight) * 0.55f, buttonWidth, buttonHeight), "Exit"))
			{
				Application.Quit();
			}
			break;

		case GameManager.GameState.InGame:
			GUI.color = Color.black;
			GUI.Label(new Rect((Screen.width - labelWidth) * 0.01f, (Screen.height - labelHeight) * 0.07f, labelWidth, labelHeight), "Score: " + gameManager.ObstaclesPast);
			GUI.Label(new Rect((Screen.width - labelWidth) * 0.01f, (Screen.height - labelHeight) * 0.11f, labelWidth, labelHeight), "High Score: " + HighScore.Highscore);
			break;

		case GameManager.GameState.Score:
			if(GUI.Button(new Rect((Screen.width - buttonWidth) * 0.425f, (Screen.height - buttonHeight) * 0.6f, buttonWidth, buttonHeight), "Back"))
			{
				GameManager.gameState = GameManager.GameState.Menu;
				gameManager.BroadcastMessage("ShowPlayer");
			}
			if(GUI.Button(new Rect((Screen.width - buttonWidth) * 0.575f, (Screen.height - buttonHeight) * 0.6f, buttonWidth, buttonHeight), "Share"))
			{
				GameManager.gameState = GameManager.GameState.Menu;
				gameManager.BroadcastMessage("ShowPlayer");
			}
			GUI.Label(new Rect((Screen.width - labelWidth) * 0.5f, (Screen.height - labelHeight) * 0.4f, labelWidth, labelHeight), "Your Score: " + gameManager.ObstaclesPast);
			GUI.Label(new Rect((Screen.width - labelWidth) * 0.5f, (Screen.height - labelHeight) * 0.5f, labelWidth, labelHeight), "High Score: " + HighScore.Highscore);
			break;
		}
	}
}