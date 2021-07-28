Task #4 
=
Speech to Text and Text to Speech
=

> This task for convert speech to text and text to speech by using IBM WATSON and Python programing language.



### To try this in your local pc follow these simple steps.

### Prerequisites
* [Python](https://www.python.org/downloads/)
* Account in [IBM Cloud](https://cloud.ibm.com)

### Setup
* Setup Watson STT Service: cloud.ibm.com/catalog 
  * Speech to Text. 
  * Text to Speech.
* Clone Live STT Code [watson-streaming](https://github.com/IBM/watson-streaming-stt) 
* using command -git clone https://github.com/IBM/watson-streaming-stt 

### Install
```
   pip install -r requirements.txt
``` 

### Speech to Text 
* In [speech.cfg](https://github.com/oaq509/smartMethod/blob/main/SpeechToText_and_TextToSpeech/speech.cfg) file
``` 
apikey = '32LEPrjPOdWtA2dO4UHoj9Nu5My48YguWNpSF3gawrJ-' #Your apikey
```
* Create [output.text](https://github.com/oaq509/smartMethod/blob/main/SpeechToText_and_TextToSpeech/output.txt) file by writing this code below in [transcribe.py](https://github.com/oaq509/smartMethod/blob/main/SpeechToText_and_TextToSpeech/transcribe.py) file.
```
with open('output.txt', 'w') as out:
            out.writelines(data['results'][0]['alternatives'][0]['transcript'])
```
> inside the on_message function. 


### Text to Speech
* In [transcribe.py](https://github.com/oaq509/smartMethod/blob/main/SpeechToText_and_TextToSpeech/transcribe.py) file write the code: 
```
authenticator = IAMAuthenticator('32LEPrjPOdWtA2dO4UHoj9Nu5My48YguWNpSF3gawrJ-') #Your apikey
tts = TextToSpeechV1(authenticator=authenticator)
tts.set_service_url('https://api.us-east.speech-to-text.watson.cloud.ibm.com/instances/a09b1232-5315-484f-8a49-220738e07890') #Your url
```
* Create [output.mp3](https://github.com/oaq509/smartMethod/blob/main/SpeechToText_and_TextToSpeech/output.mp3) file write the code 
> paste this inside the read_audio function. 
```
with open('output.txt', 'r') as f:
            text = f.readlines()
    text = [line.replace('\n','') for line in text]
    text = ''.join(str(line) for line in text)
    with open('./output.mp3', 'wb') as audio_file:
        res = tts.synthesize(text, accept='audio/mp3', voice='en-GB_JamesV3Voice').get_result()
        audio_file.write(res.content)
```



## Sources 

- https://www.youtube.com/watch?v=8k8S5ruFAUs&t=602s
- https://www.youtube.com/watch?v=A9_0OgW1LZU&t=310s
- https://www.youtube.com/watch?v=YCyuZM454_I&t=849s



