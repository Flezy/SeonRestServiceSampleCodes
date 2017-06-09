package main;

import java.io.IOException;

import org.apache.hc.client5.http.impl.sync.CloseableHttpClient;
import org.apache.hc.client5.http.impl.sync.CloseableHttpResponse;
import org.apache.hc.client5.http.impl.sync.HttpClients;
import org.apache.hc.client5.http.sync.methods.HttpPost;
import org.apache.hc.core5.http.ParseException;
import org.apache.hc.core5.http.io.entity.EntityUtils;
import org.apache.hc.core5.http.io.entity.StringEntity;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

public class SeonRestSampleFraudJava {
	public static void main(String[] args) {

		CloseableHttpClient httpclient = HttpClients.createDefault();
		HttpPost httppost = new HttpPost("https://api.seon.io/SeonRestService/fraud-api/v1.0");

		// Request parameters and other properties.
		try {

			JSONObject json = new JSONObject();
			json.put("license_key", "8bbbe856-c498-4a70-b61c-ac0d990794ba");
			json.put("javascript", "true");
			json.put("ip", "123.123.123.123");
			json.put("action_type", "");
			json.put("transaction_id", "");
			json.put("affiliate_id", "");
			json.put("affiliate_name", "");
			json.put("user_order_memo", "");
			json.put("run_email_api", "true");
			json.put("email", "");
			json.put("email_domain", "");
			json.put("password_hash", "");
			json.put("user_fullname", "");
			json.put("user_name", "");
			json.put("user_id", "");
			json.put("user_created", "");
			json.put("user_country", "");
			json.put("user_city", "");
			json.put("user_region", "");
			json.put("user_zip", "");
			json.put("user_street", "");
			json.put("user_street2", "");
			json.put("session_id", "2FCFA7EFB3300428CE27D4D1CF35E76D");
			json.put("device_id", "");
			json.put("payment_mode", "");
			json.put("card_fullname", "");
			json.put("card_bin", "");
			json.put("card_hash", "");
			json.put("card_last", "");
			json.put("avs_result", "");
			json.put("cvv_result", "");
			json.put("phone_number", "");
			json.put("transaction_type", "");
			json.put("transaction_amount", "354.55");
			json.put("transaction_currency", "");
			
			JSONArray itemArray = new JSONArray();
			
			JSONObject jsonItem = new JSONObject();
			
			jsonItem.put("item_id", "");
			jsonItem.put("item_quantity", "");
			jsonItem.put("item_name", "");
			jsonItem.put("item_price", "");
			jsonItem.put("item_store", "");
			jsonItem.put("item_store_country", "");
			jsonItem.put("item_categories", "");
			jsonItem.put("item_url", "");
			jsonItem.put("item_user_label", "");
			
			itemArray.put(jsonItem);
			
			JSONObject jsonItem2 = new JSONObject();
			
			jsonItem2.put("item_id", "");
			jsonItem2.put("item_quantity", "");
			jsonItem2.put("item_name", "");
			jsonItem2.put("item_price", "");
			jsonItem2.put("item_store", "");
			jsonItem2.put("item_store_country", "");
			jsonItem2.put("item_categories", "");
			jsonItem2.put("item_url", "");
			jsonItem2.put("item_user_label", "");
			
			itemArray.put(jsonItem2);
			
			json.put("items", itemArray);

			json.put("shipping_country", "");
			json.put("shipping_city", "");
			json.put("shipping_region", "");
			json.put("shipping_zip", "");
			json.put("shipping_street", "");
			json.put("shipping_street2", "");
			json.put("shipping_phone", "");
			json.put("shipping_fullname", "");
			json.put("shipping_method", "");
			json.put("billing_country", "");
			json.put("billing_city", "");
			json.put("billing_region", "");
			json.put("billing_zip", "");
			json.put("billing_street", "");
			json.put("billing_street2", "");
			json.put("billing_phone", "");
			json.put("discount_code", "");
			json.put("gift", "");
			json.put("gift_message", "");
			json.put("merchant_id", "");
			json.put("merchant_created_at", "");
			json.put("merchant_country", "");
			json.put("details_url", "");
			
			JSONObject userLabelJson = new JSONObject();
			userLabelJson.put("is_intangible_item", "true");
			userLabelJson.put("is_pay_on_delivery", "true");
			userLabelJson.put("departure_airport", "BUD");
			userLabelJson.put("days_to_board", "1");
			userLabelJson.put("arrival_airport", "MXP");
			
			json.put("user_label", userLabelJson);
			
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
