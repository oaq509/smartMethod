=========================================
Watson Streaming Speech to Text Example 
=========================================

The following is an example of using Watson to real time transcribe
from Speech to Text using the websockets streaming API.

Installation
============

This code is designed to run under python3 
we need to run the following:


 -pip install pipwin
 -pipwin install -r requirements.txt

That will build you a clean environment and install the required
pyaudio and websockets libraries for it's use.

Getting Started
===============

This uses the pyaudio interface to abstract talking to audio
interfaces. On the upside, this smooths over a lot of platform
differences.

Credentials
===========

we'll need to sign up for the `Watson STT service`.
IBM Cloud accounts get 500 minutes / month free.

In order to connect to the Watson streaming server we need an API Key, and to
specify which region your speech to text service was provisioned in (there are
different gateways per region). You can find these on your IBM Cloud console
for the service you have added.

Copy speech.cfg.example to speech.cfg to ensure that's valid.

Expected Output
===============

Once you run transcribe.py with a timeout value (-t) you'll get both
incremental output as data comes back, as well as a final stitching of
things together. The output will look something like this.

::

   python transcribe.py -t 20
   
   * recording
     my name is owais
     hello
     i love python so much
   * done recording

Transcription is far from perfect, but you get to see an example here
of chunking the stream as we go and how it corrects with context.

Note: nursery rhymes / poetry probably really push the context fixing
in terrible directions, but it's the thing that I can repeat over and
over again as a parent of a young child.

.. _Watson STT service: https://cloud.ibm.com/services/speech-to-text
