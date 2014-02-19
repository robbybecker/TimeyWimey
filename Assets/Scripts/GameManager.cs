using UnityEngine;
using System.Collections;

public class GameManager : MonoBehaviour 
{
	public enum GameState{Menu, InGame, Score};
	public static GameState gameState;

	Object[] obstacles;
	GameObject playerObject, player, obstacle, startPlayer;

	private int obstaclesPast = 0, index = 0, amount = 3;

	public int ObstaclesPast {
		get {
			return obstaclesPast;
		}
	}

	public float speed = 50f, startSpeed = 150f, time = 2.5f, timeDivisor = 5f, speedIncrease = 5f;

	//float[] ypos = {-4.65f, -3.65f, -2.65f, -1.65f, -0.65f, 0.65f, 1.65f, 2.65f, 3.65f, 4.65f};
	float[] ypos = {-3.65f, -2.725f, -1.8f, -0.875f, 0.05f, 0.975f, 1.9f, 2.825f, 3.75f, 4.675f};
	//float[] ypos = {-4f, -3f, -2f, -1f, -0f, 0f, 1f, 2f, 3f, 4f};

	Vector3 startPos = Vector3.zero;

	bool playerDead = false;

	void Awake()
	{
		gameState = GameState.Menu;
	}
	// Use this for initialization
	void Start () 
	{
		//player = GameObject.FindGameObjectWithTag("Player");
		startPlayer = GameObject.FindGameObjectWithTag("StartPlayer");
		playerObject = (GameObject)Resources.Load("Player", typeof(GameObject));
		obstacles = Resources.LoadAll("Obstacle");
		startPos = this.transform.position;
	}

	#if UNITY_ANDROID
	//this is a serious hack because the game hangs when the home button is pressed on some devices in Android.
	void OnApplicationPause(bool pausestatus) 
	{
		if(Application.platform == RuntimePlatform.Android && pausestatus){ //pausestatus == true for a paused game
			Application.Quit();
		}
	}
	#endif

	public void IncreaseScore()
	{
		obstaclesPast++;
	}
	
	public void CreateNew()
	{
		if(gameState == GameState.InGame && !playerDead)
		{
			if(Application.loadedLevelName == "game")
			{
				obstacle = (GameObject.Instantiate(obstacles[0], new Vector3(startPos.x, ypos[index], startPos.z), Quaternion.identity) as GameObject);
				obstacle.rigidbody2D.AddForce(new Vector2(-speed, 0f));
			}
			player.BroadcastMessage("AddSpeed");
			speed += speedIncrease;
			if((index + amount) > 9)
			{
				int diff = (index + amount - 9);
				index = 0 + diff;
				amount++;
			}
			else
			{
				index += amount;		
			}
			if(amount > 8)
			{
				amount = 2;
			}
			StartCoroutine(Sleep());
		}
	}

	private float oldTimeScale = 0f;
	private IEnumerator Sleep()
	{
		oldTimeScale = Time.timeScale;
		Time.timeScale = 0.5f;
		yield return new WaitForSeconds(0.04f);
		Time.timeScale = oldTimeScale;
	}

	public void StartGame()
	{

		playerDead = false;
		HighScore.LoadTheScore();
		startPlayer.SetActive(false);
		obstaclesPast = 0;
		index = 4; 
		amount = 2;
		speed = startSpeed;
		gameState = GameState.InGame;
		player = (GameObject)Instantiate(playerObject, new Vector3(-5f, 0f, 0f), Quaternion.identity);
		CreateNew();
	}

	public void ShowPlayer()
	{
		startPlayer.SetActive(true);
	}

	public void PlayerDead()
	{
		playerDead = true;
		GameObject[] gos = GameObject.FindGameObjectsWithTag("Obstacle");
		if(gos.Length > 0)
		{
			for(int i = 0; i < gos.Length; i++)
			{
				if(rigidbody)
				{
					Debug.Log("heello");
					gos[i].rigidbody.isKinematic = true;
				}
			}
		}
	}

	public void GameOver()
	{
		HighScore.CheckHighScore(obstaclesPast);
		GameObject[] gos = GameObject.FindGameObjectsWithTag("Obstacle");
		if(gos.Length > 0)
		{
			for(int i = 0; i < gos.Length; i++)
			{
				Destroy(gos[i]);
			}
		}
		Destroy(obstacle);
		gameState = GameState.Score;
	}
}