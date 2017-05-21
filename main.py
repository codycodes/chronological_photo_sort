################################################################################
# CODE DAY 2017
# ERIC, DANIEL, ANDREW, ALEX, CODY, CHUAN
################################################################################

import httplib, urllib, base64, json, time, os
from collections import OrderedDict

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
#Takes in file as an input
with open("toSort.txt") as infile:
   url_list = infile.readlines()
   url_list = [x.strip() for x in url_list]
infile.close()

photoUrls = url_list

# Create a dictionary to store the images in URL : age format
dict = {}

for url in photoUrls:

    body = "{'url' : \'" + url + "\'}"

    try:
        conn = httplib.HTTPSConnection('westcentralus.api.cognitive.microsoft.com')
        conn.request("POST", "/face/v1.0/detect?%s" % params, body, headers)
        response = conn.getresponse()
        data = response.read()
        #print(data)
        conn.close()
    except Exception as e:
        print("[Errno {0}] {1}".format(e.errno, e.strerror))

    data = json.loads(data)
    #print json.dumps(data, indent=4, sort_keys=True)

    try:
        #Add dict entry
        dict[url] = data[0]['faceAttributes']['age']
    except:
        pass

    time.sleep(3)

sorted_dict = {}
for key, value in sorted(dict.iteritems(), key=lambda (k,v): (v,k)):
    print "%s: %s" % (key, value)
    sorted_dict[key] = value
