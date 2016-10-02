import sys
from SimpleWebSocketServer import WebSocket, SimpleWebSocketServer
sys.stderr = open('/var/www/laravel/public/boards/pi/errorlog.txt', 'w')
import RPi.GPIO as GPIO


ledPin = 23

GPIO.setmode(GPIO.BCM)

GPIO.setup(ledPin, GPIO.OUT)


GPIO.output(ledPin, GPIO.HIGH)

sys.stderr.close()
sys.stderr = sys.__stderr__
GPIO.get_json()