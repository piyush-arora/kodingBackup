# import demjson for encoding key value pair to json
import demjson



# SETMODE CONSTANTS



#set up GPIO using BCM numbering
BCM = 1
#setup GPIO using Board numbering
BOARD = 2


# SETMODE CONSTANTS

#SETUP GPIO AS INPUT
IN = 1
#SETUP GPIO AS OUTPUT
OUT = 2


# OUTPUT CONSTANTS

#SETUP GPIO AS HIGH
HIGH = 1

#SETUP GPIO AS LOW
LOW = 2



# KEY VALUE MAP DATA
data = {}
pin_details_data =  {}
pin_number_data = {}


#test function
def helloworld():
   print "hello piyush"
   
   
#SETMODE FUNCTION TO CONFIGURE PIN NUMBERING
def setmode(mode):
    
    #Add mode to json
    #print "MODE:"
    #print mode
    data['NUMBERING_MODE'] = mode;
    

#SETUP FUNCTION TO CONFIGURE PIN MODE
def setup(pin_no, pin_mode):
    
    #Add  this to json
    #print "PIN_NUMBER:"
    #print pin_no
    #print ","
    #print "PIN_MODE:"
    #print pin_mode
    
   
    
    pin_number_data['PIN_MODE'] = pin_mode;
    
    pin_details_data['GPIO_PIN_'+ str(pin_no)] = pin_number_data; 
    
    data['PIN_DETAILS'] =pin_details_data;
    #data['PIN_DETAILS'][pin_no]['PIN_MODE'] = pin_mode
    
    
    


#OUTPUT FUNCTION TO CONFIGURE PIN HIGH OR LOW
def output(pin_no, pin_status):
    
    #Add this to json
    #print "PIN_NUMBER:"
    #print pin_no
    #print ","
    #print "PIN_STATUS:"
    #print pin_status
    pin_number_data['PIN_STATUS'] = pin_status;
    
    pin_details_data['GPIO_PIN_'+ str(pin_no)] = pin_number_data;
    
    data['PIN_DETAILS'] = pin_details_data;
    

def get_json():
    #open json file
    fo = open("/var/www/laravel/public/my_json.json", "rw+")
    
    json = demjson.encode(data)
    print json
    fo.write(json);
    

    