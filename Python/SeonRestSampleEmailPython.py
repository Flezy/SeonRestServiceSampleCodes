import requests
import json

data={
        "license_key": "8bbbe856-c498-4a70-b61c-ac0d990794ba",
        "email": "example@seon.io"}
headers = {"Content-Type": "application/json",
           "cache-control": "no-cache"}

r = requests.post("https://api.seon.io/SeonRestService/email-api/v1.0", data=json.dumps(data), headers=headers)

print(r.text)