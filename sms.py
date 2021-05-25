>>> x = int(input("import http.client

conn = http.client.HTTPSConnection("www.sms.movesms.co.ke")

payload = "username=joseh&api_key=4TpYL2bIIaPBqDB3FY60KBsxaBy7VMi8DjLV328ZNBWXJpGSBt&sender=SMARTLINK&to=+254721980625&message=hello&msgtype=5&dlr=0"

headers = {
    'apikey': "somerandomuniquekey",
    'content-type': "application/x-www-form-urlencoded",
    'cache-control': "no-cache"
    }

conn.request("POST", "/API", payload, headers)

res = conn.getresponse()
data = res.read()

print(data.decode("utf-8"))

