@extends('layout.dashboard')

@section('sidebar')

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <br>
            <li><a href="{{URL::to('dashboard')}}"><i class="glyphicon glyphicon-dashboard blue"></i> Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="{{URL::to('editprofile')}}"><i class="glyphicon glyphicon-user blue"></i> Edit profile</a></li>
            <li><a href="{{URL::to('messages')}}"><i class="glyphicon glyphicon-comment blue"></i> Messages <sup><span class="badge"> 3</span></sup></a></li>
            <li><a href="{{URL::to('order-history')}}"><i class="glyphicon glyphicon-folder-open blue"></i> Order history</a></li>
            <li><a href="{{URL::to('payments')}}"><i class="glyphicon glyphicon-credit-card blue"></i> Add funds</a></li>
            <li><a href="{{URL::to('unlock-request')}}"><i class="glyphicon glyphicon-phone blue"></i> Unlock request</a></li>
            <li><a href="{{URL::to('track-order')}}"><i class=" glyphicon glyphicon-search blue"></i> Track order</a></li>
            <li><a href="{{URL::to('report')}}"><i class=" glyphicon glyphicon-send blue"></i> Reports</a></li>
            <li class="active"><a href="{{URL::to('FAQs')}}"><i class="glyphicon glyphicon-question-sign blue"></i> FAQs</a></li>
          </ul>
          <br>
        </div>

@stop


@section('header')

<img src="../public/img/pay.png" width="100" height="100"> FAQs


@stop




@section('content')

<br>
<img class="img-responsive"src="img/homepage-image-bootloader.png" width="300" height="300">
<h4 class="yellow">Phone unlocking instructions</h4>
<p>The various are the unlocking steps of various devices. Different unlocking process will be added from time to time</p>
<br>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-success">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <i class="glyphicon glyphicon-phone yellow"></i> 1. How to Unlock BlackBerry ? 
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        


		<h4 class="yellow">Model : BlackBerry OS10 (Z10, Q10, Z5, etc..):</h4>


		<p>To get started, from the home screen, swipe down from the top to show the options menu<p>

		<ul class="nav">
		<li>1. Press the settings icon.</li>
		<li>2. From the Settings screen select "Security and Privacy".</li>
		<li>3. From the "Security and Privacy" screen select "SIM Card".</li>
		<li>4. Look for a button labeled "Unlock Network" and press it.</li>
		<li>5. On the 'SIM Security' screen, the number of attempts remaining is written in red.</li>
		
		<br>
		<p>Warning! You have a total of 10 tries to enter your unlock code. If you use up all 10 tries your phone will be permanently locked! If you have less than 5 tries left, please contact support before continuing.<p>

		<li>6. Enter the 16 digit unlock code that you received via email and press "OK".</li>
		<li>7. Your code will be accepted and you should see the section displayed in this image.</li>
		</ul>

		<br>
		<p>Note: For some models if the 16 Digits unlock code don't work, you need to enter the first 8 Digits of the code instead of the complete 16 Digits</p>

		<h4 class="yellow">Model : Blackberry 9530 Storm</h4>

		<ul class="nav">
		<li>1. Insert any SIM card and turn ON your Blackberry.</li>
		<li>2. Turn OFF all the wireless connections.</li>
		<li>3. Go Back One Step by Pressing the Back Key.</li>
		<li>4. Go to Options</li>
		<li>5. Select SIM card.</li>
		<li>6. Press the Menu Key and select "Show Keyboard".</li>
		<li>7. Tilt the phone in Horizontal Position so that the Keyboard is displayed in the Landscape Mode.</li>
		<li>8. Type MEPD [you will not be able to see the typed info].</li>
		<li>9. Then enter MEP2</li>
		<li>10. Now your Blackberry will ask you to enter network MEP code</li>
		<li>11. Enter the Unlock Code provided by us to you and Press the Enter Key on the Screen.</li>
		<li>12. It will now say "Code Accepted'.</li>
		<li>13. Congratulations! Your phone is now unlocked. Now your phone can be used with any GSM Network with SIM Card.</li>
		<li>14. Go back to the Home Screen. Press the Menu Button and click on Manage Connections.</li>
		<li>15. Turn all the Connections ON.The phone will now reboot and ''Activation Required'' will no longer be displayed.</li>
		</ul>

		<h4 class="yellow">Model : BlackBerry Bold 9000 & Torch</h4>

		<ul class="nav">
		<li>1) Make sure your SIM card is NOT inserted into the device.</li>
		<li>2) Turn on the phone and click the “Manage Connections” icon. Choose the option “Turn off all connections.” The cellular radio will be turned off.</li>
		<li>3) Go back to the Home screen and click the “Options” icon and select “Advanced Options.”</li>
		<li>4) Scroll down and select “SIM Card” from the list.</li>
		<li>5) Press the following keys in order: (M) (E) (P) (E)</li>
		<li>6) A prompt will appear asking for the unlock code. Input the 16-digit code exactly.</li>
		<li>9) Reboot your device.</li>
		<li>10) Re-enable the cellular radio</li>
		</ul>

		<h4 class="yellow">Model : Curve, 8300, 8310, 8320, 8800, 8820</h4>

		<p>Must be done without a sim card inserted & wireless radios must be turned off.</p>
		<ul class="nav">
		<li>1. Go to settings. </li>
		<li>2. Go to options. </li>
		<li>3. Go to advanced options. </li>
		<li>4. Go to sim card. </li>
		<li>4. Hold the ALT Key while typing in MEPE or MEPD or MEPPE or MEPPD ( not case sensitive ) ( you will not see text appear on screen while typing ). </li>
		<li>5. It will say "Enter Network MEP Code, then you type in the unlock code, press in the trackball to confirm. </li>
		<li>6. Your phone is now unlocked.</li> 
		</ul>

		<h4 class="yellow">Model : BlackBery Storm (9500)</h4>
		<ul class="nav">
		<li>1. Insert any sim card </li>
		<li>2. Turn off all of the wireless connections</li>
		<li>3. Go to Options</li>
		<li>4. Select Advanced Options</li>
		<li>5. Select SIM Card</li>
		<li>6. Hit menu select show keybord|</li>
		<li>7. Enter mepd (you will not be able to see the typed info)</li>
		<li>8. Enter mep2</li>
		<li>9. Now it will say enter network mep code</li>
		</ul>
		<h4 class="yellow">Model : BlackBerry 8700</h4>

		Go to the Menu -> Options -> Advanced Options -> Sim card press select, while holding the Shift key (bottom right corner CAPS), type mepd. You should now see the five locking categories listed, while holding the alt key, type mep2. Release the alt key. You are now prompted to enter the Network MEP code. Enter the code, enter Return/Enter, the device should then be unlocked. 

		<h4 class="yellow">Model : BlackBerry 8800</h4>

		<p>***** You must have a SIM card in your phone to complete these steps ( Can be active or inactive ) *****</p>
		<ul class="nav"> 
		<li>1 - Go to settings menu => and then Options</li>
		<li>2 - Select Advanced options => and then Sim card</li>
		<li>3 - Type MEPD using your Blackberry keyboard (NOTE: You will not see any text appear on the screen while typing MEPD)</li>
		<li>4 - Hold the ALT Key while typing in MEPE on your Blackberry keyboard (NOTE: You will not see any text appear on the screen while typing MEPD)</li>
		<li>5 - You should be presented with a prompt "Enter Network MEP Code". Type in the 16 digit unlock code received from UnlockBase.com and press in the track wheel / jog dial to confirm</li>
		<li>6 - Your phone is now unlocked</li>
		</ul>
		<h4 class="yellow">Model : BlackBerry 8100 Pearl</h4>
		<ul class="nav"> 
		<li>1 - Go to Options Menu => Advanced Options</li>
		<li>2 - In the SIM Card menu, hold down the shift (right of the zero, cap) press meppd</li>
		<li>3 - You'll see the unlocking level screen there you hold the ALT key (left side below @) type mepp2</li>
		<li>4 - Enter the unlock code.</li>
		</ul>
		---------

		<h4 class="yellow">Model : BlackBerry 8100 (Vodafone Australia)</h4>

		<p>PLEASE READ THE INSTRUCTIONS CAREFULLY BEFORE YOU ATTEMPT ANY UNLOCK PROCESS</p>

		<p>This procedure unlocks the handset from being network restricted from only using SIM cards from Vodafone Australia. In case of difficulties, please refer to the FAQ listed below</p>

		<ul class="nav">
		<li>1. Take note of the unlocking code shown above</li>

		<li>2. Insert a Non-Vodafone Australia working SIM card.</li>

		<li>3. Ensure the phone is charged and then switch the phone on.</li>

		<li>4. Optional Step: If the SIM card has a PIN, enter your PIN number. (See FAQ below)</li>

		<li>5. The phone will then display a message. The most common is “Invalid SIM card”. (Different message? See FAQ below)</li>

		<li>6. Select “Turn Wireless Off”</li>

		<li>7. Select “Settings” Menu , then go to Advanced Options > SIM Card</li>

		<li>8. Type alt-MEPT by holding the ALT-key and typing the letters MEPT with multitap i.e. type hold ALT, type {M}{ER}{OP}{OP}{TY}</li>

		<li>9. When prompted with “Enter Network MEP code (255 left)” on the screen, enter the 16-digit network unlock code provided for your phone, then press Enter. (Unlocking code is shown above)</li>

		<li>10. Reset the phone by pulling the battery</li>

		<li>11. Switch the phone on and the handset will be unlocked automatically. This will be confirmed if you can make and receive calls with the Non-Vodafone Australia SIM card. (You will need reception and phone credit with the different network provider)</li>

		</ul>

		<p>Please Note:

		If the unlocking code is entered incorrectly the next attempt to unlock the device will be delayed for 10 seconds increments. The number of unlocking attempts is limited to 255 tries only. When 255 attempts is reached the phone will be permanently blocked.

		To unblock the phone, it must be taken to a RIM service centre. No outgoing calls including emergency call is possible when the phone is blocked.</p>

		<p>FAQ:</p>

		<p class="yellow">Question: My phone asks to enter a PIN number</p>

		Answer: For SIM cards with PIN ENBLED you will be required to enter a PIN. This is not the unlocking code that has just been provided. For information concerning the PIN, PIN2, PUK and PUK2 codes for a SIM card please read the manual that came with your phone. This is not a handset unlocking difficulty.
			<bR>
		<p class="yellow">Question: My handset displays a different message then what is shown in this procedure when I insert a Non Vodafone Australia SIM card.</p>

		Answer: The most common message the phone will display is “Invalid SIM card”. Because each handset may have a different variation in software there is no common message. If your handset displays a different message it is recommended to move onto the next step. Note: Faulty SIM Cards - The handset may also display messages indicating the SIM you are using to unlock the handset is faulty, it could display “Insert SIM” “Bad Card”, “Card Error” or “Card Rejected”, confirm the SIM card is inserted correctly – Gold area downwards and the cut of the corner matches correctly. You will need a working Non Vodafone SIM card to unlock the handset, Vodafone can not assists with other networks faulty SIMs.

		<p class="yellow">Question: I am outside of Australia and experiencing difficulties unlocking the phone that I purchased from a Vodafone Australia outlet</p>

		Answer: Clearly note this in the difficulties description. Vodafone Australia can only send a reply to the difficulty by email.

		--------------------

		<h4 class="yellow">Model : All BlackBerry</h4>
		<ul class="nav">
		<li>1 - Using the menu go to Settings Menu -> SIM card pressselect.</li>
		<li>2 - While holding the SHIFT key, type mepd</li>
		<li>3 - You should now see the five locking categories listed.</li>
		<li>4 - While holding the SHIFT KEY, type mep2.</li>
		<li>5 - Release the shift key.</li>
		<li>6 - You are now prompted to enter the Network MEP code (it will also state how many attempts left)</li>
		<li>7 - Enter the code</li>
		<li>8 - Enter Return/Enter</li>
		<li>9 - The device should then be unlocked</li>
		</ul>

      </div>
    </div>
  </div>
 
  </div>
</div>

<p>You can contact our Customer help by mailing to <i class="glyphicon glyphicon-envelope blue"></i> info.perfectunlockgh@gmail.com or call <i class="glyphicon glyphicon-earphone blue"></i> 0244072639</p>




@stop