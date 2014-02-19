using UnityEngine;
using System.Collections;

public class Explosion : MonoBehaviour 
{
	public float duration = 0.15f, magnitude = 1.5f;
	// Use this for initialization
	void Start () 
	{
		Camera.main.GetComponent<CameraCode>().DoShake(duration, magnitude);
		Invoke("Die", 2.0f);
	}

	void Die()
	{
		Destroy(this.gameObject);
	}
}
