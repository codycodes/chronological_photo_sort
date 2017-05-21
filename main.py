########### Python 2.7 #############
import httplib, urllib, base64, json

headers = {
    # Request headers
    'Content-Type': 'application/json',
    'Ocp-Apim-Subscription-Key': '30a8fd3d505148edb7302a354cde7370',
}

params = urllib.urlencode({
    # Request parameters
    'returnFaceId': 'true',
    'returnFaceLandmarks': 'false',
    'returnFaceAttributes': 'age',
})

# Replace the example URL below with the URL of the image you want to analyze.
body = "{'url' : 'http://i.imgur.com/kl5UuO1.png' }"

try:
    conn = httplib.HTTPSConnection('westcentralus.api.cognitive.microsoft.com')
    conn.request("POST", "/face/v1.0/detect?%s" % params, body, headers)
    response = conn.getresponse()
    data = response.read()
    print(data)
    conn.close()
except Exception as e:
    print("[Errno {0}] {1}".format(e.errno, e.strerror))

data = json.loads(data)
print json.dumps(data, indent=4, sort_keys=True)
print data[0]['faceAttributes']['age']
