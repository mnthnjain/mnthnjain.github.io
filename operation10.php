


<!DOCTYPE HTML>  
<html>
<head>
<html>
<head>
<style>
	
header, footer {
    padding: 20px;
    color: white;
    background-color: 	#2F4F4F;
    clear: left;
    text-align: left;
}
.error {color: #FF0000;}
	form{ border-radius: 25px;
    border: 3px solid #708090;
    
		background-color: lightgrey;
		
		width:40%;
    float:center;
		padding-top:40px;
padding-right:40px;
padding-bottom:40px;
padding-left:100px;
   	 margin: auto;
		border-style: outset;
	}
	input[type=text],input[type=number]  {
    width: 80%;
    padding: 12px 20px;
		 background-color:	#F5F5F5;
    margin: 8px 0;
    display: inline-block;
    //border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
		border: none;
    border-bottom: 2px solid #ccc;
	}
	
input[type=submit] {
    width: 80%;
    background-color:#191970;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}
	input[type=submit]:hover {
    background-color: #191970;
}

	body {
   	margin: 0;
		         font-family: Verdana,sans-serif;
		background-image : url("http://www.livemint.com/rf/Image-621x414/LiveMint/Period1/2013/01/23/Photos/GIFT-Day_View--621x414.jpg");
	/*	background-repeat: no-repeat;
        
		background-image: transparent;
		background-attachment: fixed;
		background-size: contain;*/
		-moz-background-size: cover;
-webkit-background-size: cover;
background-size: cover;
background-position: top center !important;
background-repeat: no-repeat !important;
background-attachment: fixed;
	}
	
</style>
</head>
<body>  
	<header><b>Smart City Mission - Smart Solutions</b></header>
<article><p style="font-style: italic;">&nbsp;&nbsp;Back in 2015, our honorable Prime Minister, Shri Narendra Modi, launched the Smart City Mission. The whole idea of this project is to plan the city in such a way that citizen’s &nbsp;&nbsp;views and recommendations are considered. Therefore, we want your opinions and views about how your city can be transformed into a smart city. Therefore, we request you &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;to spend some of your valuable time in filling this survey form. For any clarifications, mail us at digjoy.samanta@gmail.com
	</article>	</p>

<br><br>
<form method="get" action="i.php"
  <div class="background">
						 <h2>Enter your personal information</h2>
  E-mail adress: <br><input type="text" name="email" value="" placeholder="Enter a valid email-id">
  
  <br><br>
  Name: <br><input type="text" name="name" value="" placeholder="Enter your name">
  <br><br>
  City: <br><input type="text" name="website" value="" placeholder="Enter an indian city" >
  <br><br>
  Age:<br> <input type="number" name="age" placeholder="Enter your age">
 					 <br><br>
  Gender:<br>//<span class="error"><?php echo $genderErr;?></span>
  <input type="radio" name="gender" value="female">Female<br>
  <input type="radio" name="gender"  value="male">Male<br>
	 <input type="radio" name="gender"  value="prefernottosay">Prefer not to say<br>
	<input type="radio" name="gender" value="others">Others		<br>												  
  <br><br><br>
  <h2> Assessment of Economic Activity</h2>
<article><p style="font-style: italic;">&nbsp;&nbsp;Taking Economic Activities as reference, assess each criteria comparatively and select the option that matches the most in terms of your opinion in terms of its contribution to the &nbsp;&nbsp;development of Smart City in the Indian scenario .</article>	</p>
  
  Infrastructure facilities (for e.g - Transportation Facilities, Industrial Zoning, etc.)<br>
  <input type="radio" name="q1" value="1">Equally Preffered<br>
  <input type="radio" name="q1"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q1"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q1" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q1" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
   Utilities and their availability for all (for e.g. - Gas, Water, Sewage Treatment Facilities, etc.) <br>
  <input type="radio" name="q2" value="1">Equally Preffered<br>
  <input type="radio" name="q2"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q2"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q2" value="7">Fairly S
2" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
     Social Framework in the City (for e.g. - Affordable Housing, Community Service)  <br>
  <input type="radio" name="q3" value="1">Equally Preffered<br>
  <input type="radio" name="q3"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q3"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q3" value="7">Fairly Strongly Preffered	<br>												  												  
  <input type="radio" name="q3" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
  Governance of a Smart City with respect to its autonomy, organization structure, etc. <br>
  <input type="radio" name="q4" value="1">Equally Preffered<br>
  <input type="radio" name="q4"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q4"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q4" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q4" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
  Sustainable Environment (for e.g. - The amount of Green Cover, Pollution Tackling strategies, etc.)<br>
  <input type="radio" name="q5" value="1">Equally Preffered<br>
  <input type="radio" name="q5"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q5"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q5" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q5" value="9">Absolutely Preffered	<br>												  
  
  <br><br><br><br>
   <h2> Assessment of Infrastructure of a Smart City</h2>
 <article><p style="font-style: italic;">&nbsp;&nbsp;Taking Infrastructure facilities for e.g - Transportation Facilities, Industrial Zoning, etc. as reference, assess each criteria comparatively and select the option that matches the most&nbsp;&nbsp; &nbsp;&nbsp;in terms of your opinion in terms of its contribution to the development of Smart City in the Indian scenario .</article>	</p>
			
														  Utilities and their availability for all (for e.g. - Gas, Water, Sewage Treatment Facilities, etc.)Utilities and their availability for all (for e.g. - Gas, Water, Sewage Treatment Facilities, etc.)<br>
  <input type="radio" name="q6" value="1">Equally Preffered<br>
  <input type="radio" name="q6"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q6"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q6" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q6" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
   Social Framework in the City (for e.g. - Affordable Housing, Community Service) <br>
  <input type="radio" name="q7" value="1">Equally Preffered<br>
  <input type="radio" name="q7"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q7"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q7" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q7" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
     Evolution of Innovative Business Models (for e.g. - Public Private Partnership Mode of Development, Monetisation of Service)  <br>
  <input type="radio" name="q8" value="1">Equally Preffered<br>
  <input type="radio" name="q8"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q8"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q8" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q8" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
  Governance of a Smart City with respect to its autonomy, organization structure, etc.  <br>
  <input type="radio" name="q9" value="1">Equally Preffered<br>
  <input type="radio" name="q9"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q9"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q9" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q9" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
  Sustainable Environment (for e.g. - The amount of Green Cover, Pollution Tackling strategies, etc.)<br>
  <input type="radio" name="q10" value="1">Equally Preffered<br>
  <input type="radio" name="q10"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q10"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q10" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q10" value="9">Absolutely Preffered	<br>												  
  
  <br><br><br><br>
 
			
			<h2> Assessment of Utilities Available in a Smart City</h2>
  <article><p style="font-style: italic;">&nbsp;&nbsp;Taking Utilities and their availability for all for e.g. - Gas, Water, Sewage Treatment Facilities, etc. as reference, assess each criteria comparatively and select the option that &nbsp;&nbsp;matches the most in terms of your opinion in terms of its contribution to the development of Smart City in the Indian scenario ,</article>	</p>
			
			
			
														  Social Framework in the City (for e.g. - Affordable Housing, Community Service)<br>
  <input type="radio" name="q11" value="1">Equally Preffered<br>
  <input type="radio" name="q11"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q11"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q11" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q11" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
   Evolution of Innovative Business Models (for e.g. - Public Private Partnership Mode of Development, Monetisation of Service) <br>
  <input type="radio" name="q12" value="1">Equally Preffered<br>
  <input type="radio" name="q12"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q12"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q12" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q12" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
     Governance of a Smart City with respect to its autonomy, organization structure, etc.  <br>
  <input type="radio" name="q13" value="1">Equally Preffered<br>
  <input type="radio" name="q13"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q13"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q13" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q13" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
  Sustainable Environment (for e.g. - The amount of Green Cover, Pollution Tackling strategies, etc.) <br>
  <input type="radio" name="q14" value="1">Equally Preffered<br>
  <input type="radio" name="q14"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q14"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q14" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q14" value="9">Absolutely Preffered	<br>												  
  
  <br><br><br><br>
<h2> Assessment of Social Framework of a Smart City</h2>
														  <article><p style="font-style: italic;">&nbsp;&nbsp;Taking Social Framework in the City for e.g. - Affordable Housing, Community Service as reference, assess each criteria comparatively and select the option that matches the&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;most in terms of your opinion in terms of its contribution to the development of Smart City in the Indian scenario ,</article>	</p>
   
 Evolution of Innovative Business Models (for e.g. - Public Private Partnership Mode of Development, Monetisation of Service) <br>
  <input type="radio" name="q15" value="1">Equally Preffered<br>
  <input type="radio" name="q15"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q15"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q15" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q15" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
   Governance of a Smart City with respect to its autonomy, organization structure, etc. <br>
  <input type="radio" name="q16" value="1">Equally Preffered<br>
  <input type="radio" name="q16"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q16"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q16" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q16" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
    Sustainable Environment (for e.g. - The amount of Green Cover, Pollution Tackling strategies, etc.) <br>
  <input type="radio" name="q17" value="1">Equally Preffered<br>
  <input type="radio" name="q17"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q17"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q17" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q17" value="9">Absolutely Preffered	<br>												  
  
  <br><br><br><br>

  <h2> Governance of a Smart City with respect to its autonomy, organization structure, etc. </h2>
  
														  <article><p style="font-style: italic;">&nbsp;&nbsp;Taking Evolution of Innovative Business Models for e.g. - Public Private Partnership Mode of Development, Monetisation of Service as reference, assess each criteria comparatively and select the option that matches the most in terms of your opinion in terms of its contribution to the development of Smart City in the Indian scenario ,</article>	</p>
			
			Social Framework in the City (for e.g. - Affordable Housing, Community Service)<br>
  <input type="radio" name="q18" value="1">Equally Preffered<br>
  <input type="radio" name="q18"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q18"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q18" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q18" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
   Sustainable Environment (for e.g. - The amount of Green Cover, Pollution Tackling strategies, etc.) <br>
  <input type="radio" name="q19" value="1">Equally Preffered<br>
  <input type="radio" name="q19"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q19"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q19" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q19" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
    

<br><br>
<h2> Assessment of Governance of a Smart City </h2>
 <article><p style="font-style: italic;">&nbsp;&nbsp;Taking Governance of a Smart City with respect to its autonomy, organization structure, etc. as reference, assess each criteria comparatively and select the option that matches the most in terms of your opinion in terms of its contribution to the development of Smart City in the Indian scenario ,</article>	</p>

   Sustainable Environment (for e.g. - The amount of Green Cover, Pollution Tackling strategies, etc.) <br>
  <input type="radio" name="q20" value="1">Equally Preffered<br>
  <input type="radio" name="q20"  value="3">Weakly Preffered<br>
	 <input type="radio" name="q20"  value="5">Fairly strongly prefered<br>
	<input type="radio" name="q20" value="7">Fairly Strongly Preffered	<br>												  
  <input type="radio" name="q20" value="9">Absolutely Preffered	<br>												  
  
  <br><br>
			
			<input type="submit" name="submit" value="SUBMIT">  </div>
</form>
<br><br><br>


</body>
</html>
 		
