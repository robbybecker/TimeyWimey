using UnityEngine;
using System.Collections;

public class Player : MonoBehaviour 
{
	private enum InputStatus{Down, On, Up};
	private InputStatus inputStatus;

	private enum BulletTimeStatus{Off, On, TurningOff};
	private BulletTimeStatus bulletTimeStatus;

	public Texture circle,
					controlCircle;
	private GameObject explosion, 
					gameManager, 
					bulletTimeGO;
	private Transform myTransform;
	private CameraCode cam;
	private Vector2 controlVector;
	private float speed, 
				actualSpeed = 0f,
				touchMagnitude = 10f;
	
	private bool bulletTiming = false,
				isAlive = true,
				minnedOut = true;

	private Color onColor = new Color(1,1,1, 0.5f);
	private Color offColor = new Color(1,1,1, 0.25f);

	private SpriteRenderer upSr, downSr;

	public GUISkin mySkin;

	public float bulletTime = 1f,
				startBulletTime = 1f,
				energy = 1f,
				maxEnergy = 1f,
				dechargeSpeed = 4f,
				rechargeSpeed = 6f,
				playerSpeed = 3f,
				speedIncrease = 0.2f,
				timeDechargeSpeed = 1f,
				timeRechargeSpeed = 0.5f;

	// Use this for initialization
	void Start () 
	{
		myTransform = this.transform;
		energy = maxEnergy;
		speed = playerSpeed;
		bulletTimeStatus = BulletTimeStatus.Off;
		inputStatus = InputStatus.Up;
		bulletTime = startBulletTime;
		Time.timeScale = startBulletTime;
		explosion = (GameObject)Resources.Load("Explosion", typeof(GameObject));
		gameManager = GameObject.FindGameObjectWithTag("GameController");
		bulletTimeGO = GameObject.FindGameObjectWithTag("BulletTime");
		upSr = GameObject.FindGameObjectWithTag("Up").GetComponent<SpriteRenderer>();
		downSr = GameObject.FindGameObjectWithTag("Down").GetComponent<SpriteRenderer>();
		isAlive = true;
		cam = Camera.main.GetComponent<CameraCode>();
	}
	
	// Update is called once per frame
	void Update () 
	{
		if(GameManager.gameState == GameManager.GameState.InGame && isAlive)
		{
			#if UNITY_STANDALONE// || UNITY_EDITOR
			GetPCInput();
			#else
			GetTouchInput();
			#endif

			Controls();
		}
	}

	public void RechargeTime()
	{
		energy += 0.1f;
		if(energy >= maxEnergy)
			energy = maxEnergy;
	}

	void BulletTime()
	{
		if(inputStatus == InputStatus.On)
		{
			if(energy > 0.01f)
			{
				if(bulletTimeStatus == BulletTimeStatus.Off)
				{
					cam.DoShake(0.1f, 1.3f);
					bulletTimeGO.BroadcastMessage("BulletTimeOn");
					bulletTimeStatus = BulletTimeStatus.On;
				}
				if(bulletTimeStatus == BulletTimeStatus.On)
				{
					energy -= Time.deltaTime * dechargeSpeed;
					if(energy <= 0.01f)
					{
						energy = 0.01f;
						bulletTimeStatus = BulletTimeStatus.TurningOff;
					}
					else
					{
						bulletTime -= Time.deltaTime * timeDechargeSpeed;
						if(bulletTime <= 1f)
						{
							bulletTime = 1f;
						}
						Time.timeScale = bulletTime;
					}
				}
			}
		}
		else if(inputStatus == InputStatus.Up)
		{
			bulletTimeStatus = BulletTimeStatus.TurningOff;
		}

		if(bulletTimeStatus == BulletTimeStatus.TurningOff)
		{
			bulletTime += Time.deltaTime * timeRechargeSpeed;
			if(bulletTime >= startBulletTime)
			{
				bulletTime = startBulletTime;
			}
			Time.timeScale = bulletTime;
			if(Time.timeScale >= 2f)
			{
				Time.timeScale = 2f;
				bulletTimeStatus = BulletTimeStatus.Off;
				bulletTimeGO.BroadcastMessage("BulletTimeOff");
			}
		}
		/*if(inputStatus == InputStatus.On && !minnedOut)
		{
			if(!bulletTiming)
			{
				cam.DoShake(0.1f, 1.3f);
				bulletTimeGO.BroadcastMessage("BulletTimeOn");
				bulletTiming = true;
			}
			bulletTime -= Time.deltaTime * dechargeSpeed;
			if(bulletTime <= 1f)
			{
				bulletTime = 1f;
				minnedOut = true;
			}
			Time.timeScale = bulletTime;
		}
		else if(inputStatus == InputStatus.Up && !minnedOut)
		{
			minnedOut = true;
		}
		else if(minnedOut)
		{
			bulletTime += Time.deltaTime * rechargeSpeed;
			if(bulletTime >= startBulletTime)
			{
				bulletTime = startBulletTime;
				minnedOut = false;
			}
			Time.timeScale += Time.deltaTime * dechargeSpeed;
			if(Time.timeScale >= 2f)
			{
				Time.timeScale = 2f;
				if(bulletTiming)
				{
					bulletTimeGO.BroadcastMessage("BulletTimeOff");
					bulletTiming = false;
				}
			}
		}*/
	}

	void Controls()
	{
		BulletTime();

		Vector2 targetVelocity = controlVector;
		if(targetVelocity.magnitude > 1)
		{
			targetVelocity = targetVelocity.normalized;
		}
		//Vector2 targetVelocity = controlVector;
		cam.Move(targetVelocity);

		actualSpeed = speed * (1.2f / bulletTime );
		targetVelocity *= actualSpeed;
		
		// Apply a force that attempts to reach our target velocity
		Vector2 velocityChange = (targetVelocity - rigidbody2D.velocity);
		velocityChange.x = Mathf.Clamp(velocityChange.x, -10f, 10f);
		velocityChange.y = Mathf.Clamp(velocityChange.y, -10f, 10f);

		rigidbody2D.AddForce(velocityChange);
	}

	float delta = 0f;

	string touchString = "";
	private float stationaryTime = 0f;
	private Vector2 startTouchPos = Vector2.zero;

	private float touchingMag = 0f;

	private void GetTouchInput()
	{
		RaycastHit hit;
		/*
		if(Input.GetMouseButton(0))
		{
			Ray ray = Camera.allCameras[0].ScreenPointToRay(Input.mousePosition);

			if(Physics.Raycast(ray, out hit, 1000f))
			{
				Debug.Log(hit.transform.name);

				if(hit.transform.tag == "Up")
				{
					controlVector = new Vector2(0, 1f);
				}
				else if(hit.transform.tag == "Down")
				{
					controlVector = new Vector2(0, -1f);
				}
				else
				{
					controlVector = Vector2.zero;
					
				}
			}
			else
			{
				controlVector = Vector2.zero;
				
			}
		}
		else if(Input.GetMouseButtonUp(0))
		{
			controlVector = Vector2.zero;
			
		}*/

		Touch movingTouch, timeTouch;
		foreach (Touch touch in Input.touches) 
		{
			if(touch.position.x < Screen.width * 0.45f)
			{
				movingTouch = touch;

				if(movingTouch.phase == TouchPhase.Began || movingTouch.phase == TouchPhase.Moved || movingTouch.phase == TouchPhase.Stationary)
				{
					Ray ray = Camera.allCameras[0].ScreenPointToRay(movingTouch.position);
					
					if(Physics.Raycast(ray, out hit, 1000f))
					{						
						if(hit.transform.tag == "Up")
						{
							upSr.color = onColor;
							downSr.color = offColor;
							controlVector = new Vector2(0, 1f);
						}
						else if(hit.transform.tag == "Down")
						{
							downSr.color = onColor;
							upSr.color = offColor;
							controlVector = new Vector2(0, -1f);
						}
						else
						{
							downSr.color = offColor;
							upSr.color = offColor;
							controlVector = Vector2.zero;
						}
					}
					else
					{
						downSr.color = offColor;
						upSr.color = offColor;
						controlVector = Vector2.zero;
					}
				}
				else if(movingTouch.phase == TouchPhase.Ended || movingTouch.phase == TouchPhase.Canceled)
				{
					downSr.color = offColor;
					upSr.color = offColor;
					controlVector = Vector2.zero;
					
				}
				/*switch(movingTouch.phase)
				{
				case TouchPhase.Began:
					touchString = movingTouch.phase.ToString();
					startTouchPos = movingTouch.position;
					break;
				case TouchPhase.Moved:
					touchString = movingTouch.phase.ToString();
					stationaryTime = 0f;
					Vector2 newVector = new Vector2(0f, movingTouch.position.y - startTouchPos.y);
					touchingMag = newVector.magnitude;
					//if(newVector.magnitude >= touchMagnitude)
					if(newVector.magnitude >= theMag)
					{
						newVector = newVector / 50f;
						controlVector = newVector;
					}
					else
					{
						//startTouchPos = movingTouch.position;
						controlVector = Vector2.zero;
					}
					delta = controlVector.y;
					break;
				case TouchPhase.Stationary:
					touchString = movingTouch.phase.ToString();
					break;
				case TouchPhase.Ended:
					touchString = movingTouch.phase.ToString();
					controlVector = Vector2.zero;
					delta = controlVector.y;
					break;
				}*/
			}
			else if(touch.position.x > Screen.width * 0.55f)
			{
				timeTouch = touch;
				if(timeTouch.phase == TouchPhase.Began)
				{
					inputStatus = InputStatus.On;
				}
				else if(timeTouch.phase == TouchPhase.Ended)
				{
					inputStatus = InputStatus.Up;
				}
			}
		}
	}

	private void GetPCInput()
	{
		if(Input.GetMouseButton(0))
		{
			inputStatus = InputStatus.On;
		}
		else if(Input.GetMouseButtonUp(0))
		{
			inputStatus = InputStatus.Up;
		}

		bool up = Input.GetKey(KeyCode.W);
		bool down = Input.GetKey(KeyCode.S);

		controlVector = Vector2.zero;
		if(up)
			controlVector = new Vector2(0,1);
		else if(down)
			controlVector = new Vector2(0,-1);
	}

	public void AddSpeed()
	{
		speed += speedIncrease;
	}

	void OnCollisionEnter2D(Collision2D collision)
	{
		if(isAlive)
		{
			downSr.color = offColor;
			upSr.color = offColor;
			Time.timeScale = 1f;
			gameManager.BroadcastMessage("PlayerDead");
			if(collision.rigidbody)
				collision.rigidbody.isKinematic = true;
			isAlive = false;
			Physics2D.IgnoreLayerCollision(9,10);

			GameObject.Instantiate(explosion, myTransform.position, Quaternion.identity);
			bulletTimeGO.BroadcastMessage("BulletTimeOff");
			rigidbody2D.fixedAngle = false;
			rigidbody2D.AddForce(new Vector2(Random.Range(0f, 1f) * 200f, 0f/*Random.Range(-0.5f, 0.5f) * 100f*/) );
			StartCoroutine(WaitToDestroy());
		}
	}

	IEnumerator WaitToDestroy()
	{
		yield return new WaitForSeconds(0.5f);
		rigidbody2D.AddTorque(Random.Range(-50f, 50f));
		yield return new WaitForSeconds(0.25f);
		gameManager.BroadcastMessage("GameOver");
		yield return new WaitForSeconds(1f);
		GameObject.Instantiate(explosion, myTransform.position, Quaternion.identity);
		Physics2D.IgnoreLayerCollision(9,10, false);
		
		Destroy(this.gameObject);
	}
	public static float theMag = 0.25f;

	void OnGUI()
	{
		GUI.skin = mySkin;

		if(GameManager.gameState == GameManager.GameState.InGame)
		{
			//GUI.DrawTexture(new Rect((Screen.width - 128f)  * 0.1f, (Screen.height - 128f)  * 0.5f, 128f, 128f), circle);
			//GUI.DrawTexture(new Rect((Screen.width - 32f)  * 0.1f, (Screen.height - 32f)  * 0.5f, 32f, 32f), controlCircle);
			
			GUI.Label(new Rect((Screen.width - 100f)  * 1f, (Screen.height - 25f)  * 0.05f, 100f, 25f),""+ touchingMag);
			GUI.Label(new Rect((Screen.width - 100f)  * 1f, (Screen.height - 25f)  * 0.1f, 100f, 25f),""+ touchString);

			float multiplier = (Screen.width  * 0.1f);
			//Rect rect = new Rect((Screen.width  * 0.005f), (Screen.height  * 0.03f), startBulletTime * multiplier, (Screen.height  * 0.005f));
			//GUI.HorizontalScrollbar(rect, 0f, (bulletTime - 1f) * multiplier, 0f, (startBulletTime-1f) * multiplier);

			Rect rect = new Rect((Screen.width  * 0.005f), (Screen.height  * 0.03f), maxEnergy * multiplier, (Screen.height  * 0.005f));
			GUI.HorizontalScrollbar(rect, 0f, energy * multiplier, 0f, maxEnergy * multiplier);
		}
	}
}