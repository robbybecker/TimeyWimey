using UnityEngine;
using System.Collections;

public class SetControlXPos : MonoBehaviour 
{
	float xDiff = 0;
	Vector3 p;
	// Use this for initialization
	void Start () 
	{
		xDiff = GetComponent<SpriteRenderer>().bounds.extents.x;
		p = Camera.main.ScreenToWorldPoint(new Vector3(0, 0, Camera.main.farClipPlane));
		this.transform.position = new Vector3 (p.x + xDiff, this.transform.position.y, this.transform.position.z);
	}
}