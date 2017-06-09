package main;

import java.io.IOException;

import org.apache.hc.client5.http.impl.sync.CloseableHttpClient;
import org.apache.hc.client5.http.impl.sync.CloseableHttpResponse;
import org.apache.hc.client5.http.impl.sync.HttpClients;
import org.apache.hc.client5.http.sync.methods.HttpPost;
import org.apache.hc.core5.http.ParseException;
import org.apache.hc.core5.http.io.entity.EntityUtils;
import org.apache.hc.core5.http.io.entity.StringEntity;
import org.json.JSONException;
import org.json.JSONObject;

public class SeonRestSampleJava {

	public static void main(String[] args) {

		CloseableHttpClient httpclient = HttpClients.createDefault();
		HttpPost httppost = new HttpPost("https://api.seon.io/SeonRestService/email-api/v1.0");

		// Request parameters and other properties.
		try {

			JSONObject json = new JSONObject();
			json.put("license_key", "8bbbe856-c498-4a70-b61c-ac0d990794ba");
			json.put("email", "example@seon.io");

			httppost.setEntity(new StringEntity(json.toString()));
			httppost.setHeader("Content-Type", "application/json");
			httppost.setHeader("cache-control", "no-cache");

			// Execute and get the response.
			CloseableHttpResponse response = null;
			try {
				response = httpclient.execute(httppost);
				String result = EntityUtils.toString(response.getEntity());

			} catch (IOException e) {

				// Wrong httpRequest
				e.printStackTrace();

			} catch (ParseException e) {

				// We are unable to parse responseBody
				e.printStackTrace();

			} finally {
				try {
					response.close();
				} catch (IOException ioe) {

					// Unable to close response stream
					ioe.printStackTrace();
				}
			}
		} catch (JSONException e) {

			// Wrong JSON format
			e.printStackTrace();
		}

	}

}
