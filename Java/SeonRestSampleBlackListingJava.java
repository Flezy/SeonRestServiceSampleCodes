package main;

import java.io.IOException;

import org.apache.hc.client5.http.impl.sync.CloseableHttpClient;
import org.apache.hc.client5.http.impl.sync.CloseableHttpResponse;
import org.apache.hc.client5.http.impl.sync.HttpClients;
import org.apache.hc.client5.http.sync.methods.HttpPost;
import org.apache.hc.client5.http.sync.methods.HttpPut;
import org.apache.hc.core5.http.ParseException;
import org.apache.hc.core5.http.io.entity.EntityUtils;
import org.apache.hc.core5.http.io.entity.StringEntity;
import org.json.JSONException;
import org.json.JSONObject;

public class SeonRestSampleBlackListingJava {

	public static void main(String[] args) {

		CloseableHttpClient httpclient = HttpClients.createDefault();
		HttpPut httpput = new HttpPut("https://api.seon.io/SeonRestService/fraud-api/user/123-123/");

		// Request parameters and other properties.
		try {

			JSONObject json = new JSONObject();
			json.put("license_key", "8bbbe856-c498-4a70-b61c-ac0d990794ba");
			json.put("label", "fraud");
			json.put("state", "blacklist");
			json.put("label_email", "true");
			json.put("label_address","true");
			json.put("label_fingerprints", "true");
			json.put("label_ip", "true");
			json.put("label_phone", "true");
			json.put("comment", "this is a fake user");

			httpput.setEntity(new StringEntity(json.toString()));
			httpput.setHeader("Content-Type", "application/json");
			httpput.setHeader("cache-control", "no-cache");

			// Execute and get the response.
			CloseableHttpResponse response = null;
			try {
				response = httpclient.execute(httpput);
				String result = EntityUtils.toString(response.getEntity());
				System.out.println(result);

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
