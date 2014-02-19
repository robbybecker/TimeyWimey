using UnityEngine;
using System.Collections;

public class BulletTime : MonoBehaviour 
{
	SpriteRenderer sr;
	float lastInterval = 0f;
	void Start()
	{
		sr = this.GetComponent<SpriteRenderer>();
		BulletTimeOff();
		lastInterval = Time.realtimeSinceStartup;
	}
	float alpha;
	void Update()
	{
		if(this.gameObject.renderer.enabled)
		{
			float timeNow = Time.realtimeSinceStartup;
			float deltaTime = timeNow - lastInterval;

			alpha = 0.25f +  Mathf.PingPong(deltaTime * 3000f, 0.33f);
			Color color = new Color(1,1,1, alpha);
			sr.color = color;
			lastInterval = timeNow;
		}
	}

	public void BulletTimeOn()
	{
		this.gameObject.renderer.enabled = true;
		Color color = new Color(1,1,1,0);
		sr.color = color;
	}

	public void BulletTimeOff()
	{
		this.gameObject.renderer.enabled = false;
		Color color = new Color(1,1,1,0);
		sr.color = color;
	}
}