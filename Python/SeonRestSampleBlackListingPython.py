7
import requests
import json

data={
     "license_key": "550e8400-e29b-41d4-a716-446655440000",
     "state": "blacklist",
     "label_email": "true",
     "label_address": "true",
     "label_fingerprints": "true",
     "label_ip": "true",
     "label_phone": "true",
     "comment": "this is a fake user"
        }
headers = {"Content-Type": "application/json"}

r = requests.put("https://api.seon.io/SeonRestService/fraud-api/user/123-123", data=json.dumps(data), headers=headers)
