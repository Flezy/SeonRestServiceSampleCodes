7
import requests
import json

data={
     "license_key": "[license_key]",
     "label" : "fraud"
        }
headers = {"Content-Type": "application/json"}

r = requests.put("https://api.seon.io/SeonRestService/fraud-api/label/[id]", data=json.dumps(data), headers=headers)
