using UnityEngine;
using System.Collections;

public class CameraCode : MonoBehaviour 
{
	private Vector3 velocity = Vector3.zero;
	private Transform myTransform;
	void Start()
	{
		myTransform = this.transform;
	}

	public void DoShake(float mag, float dur)
	{
		StartCoroutine(Shake(mag, dur));
	}
	IEnumerator Shake(float magnitude, float duration)
	{
		float elapsed = 0.0f;
		
		Vector3 origCamPos = Camera.main.transform.position;
		
		while(elapsed < duration)
		{
			elapsed += Time.deltaTime;
			float percentageComplete = elapsed / duration;
			float damper = 1.0f - Mathf.Clamp(4.0f * percentageComplete - 3.0f, 0.0f, 1.0f);
			
			float x = Random.value * 2f - 1f;
			float y = Random.value * 2f - 1f;
			x *= magnitude * damper;
			y *= magnitude * damper;
			
			Camera.main.transform.position = new Vector3 (x,y, origCamPos.z);
			yield return null;
		}
		
		Camera.main.transform.position = origCamPos;
	}

	public float moveMag = 0.1f, smoothTime = 0.2f;
	public void Move(Vector3 vector)
	{
		vector *= moveMag ;
		myTransform.position = Vector3.SmoothDamp(myTransform.position, new Vector3(0f, vector.y, myTransform.position.z), ref velocity, smoothTime);
	}
}
