using UnityEngine;
using System.Collections;

public class Trigger : MonoBehaviour
{
	GameObject  gameManager;
	// Use this for initialization
	void Start () 
	{
		gameManager = GameObject.FindGameObjectWithTag("GameController");
	}

	void OnTriggerEnter2D(Collider2D other)
	{
		if(other.tag != "Player")
		{
			StartCoroutine("DoDestroy", other.transform.parent.gameObject);
			gameManager.BroadcastMessage("CreateNew");
		}
	}

	IEnumerator DoDestroy(GameObject go)
	{
		yield return new WaitForSeconds(3f);
		if(go)
		{
			Destroy(go);
		}
	}
}