import requests
import json

data={
    "license_key": "f5ee07ab-481c-4a72-93f6-051d4decac1e",
    "ip": "68.65.122.236"
        }
headers = {"Content-Type": "application/json",
           "cache-control": "no-cache"}

r = requests.post("https://api.seondev.space/SeonRestService/proxy-api/", data=json.dumps(data), headers=headers)

print(r.text)