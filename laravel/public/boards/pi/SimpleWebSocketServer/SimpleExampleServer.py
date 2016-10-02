
from SimpleWebSocketServer import WebSocket, SimpleWebSocketServer

class My_Socket(WebSocket):
   def handleMessage(self):
      print self.data
      if (self.data == "a"):
        self.sendMessage("wow")
      else:
        self.sendMessage("grrrrr")

   def handleConnected(self):
      pass

   def handleClose(self):
      pass

try:
    # TODO: write code...
    server = SimpleWebSocketServer("hackincloud.com", 8000, My_Socket)
    server.serveforever()
except Exception, e:
    server = SimpleWebSocketServer("hackincloud.com", 8001, My_Socket)
    server.serveforever()
else:
    # TODO: write code...
    server = SimpleWebSocketServer("hackincloud.com", 8002, My_Socket)
    server.serveforever()
finally:
    # TODO: write code...
    #server = SimpleWebSocketServer("hackincloud.com", 8000, My_Socket)
    server = SimpleWebSocketServer("hackincloud.com", 8003, My_Socket)
    server.serveforever()


