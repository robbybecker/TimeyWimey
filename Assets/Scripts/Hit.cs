using UnityEngine;
using System.Collections;

public class Hit : MonoBehaviour 
{
	private GameObject explosion;
	// Use this for initialization
	void Start () 
	{
		explosion = (GameObject)Resources.Load("SmallExplosion", typeof(GameObject));
	}

	void OnTriggerEnter2D(Collider2D other)
	{
		if(other.tag == "Player")
		{
			other.BroadcastMessage("RechargeTime");
			GameObject.FindGameObjectWithTag("GameController").BroadcastMessage("IncreaseScore");
			GameObject.Instantiate(explosion, transform.position, Quaternion.identity);
			Destroy(this.gameObject);
		}
	}
}