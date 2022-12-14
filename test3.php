<!DOCTYPE html>
<html lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<!-- <script src="custom_script.js"></script>
 -->
<script type="text/javascript">

var pdf,page_section,HTML_Width,HTML_Height,top_left_margin,PDF_Width,PDF_Height,canvas_image_width,canvas_image_height;


function calculatePDF_height_width(selector,index){
 page_section = $(selector).eq(index);
 HTML_Width = page_section.width();
 HTML_Height = page_section.height();
 top_left_margin = 15;
 PDF_Width = HTML_Width + (top_left_margin * 2);
 PDF_Height = (PDF_Width * 1.2) + (top_left_margin * 2);
 canvas_image_width = HTML_Width;
 canvas_image_height = HTML_Height;
 }
 
 	
	// var testdiv = document.getElementsById("page1-div");

	function generatePDF() {
        pdf = "";
 // $("#downloadbtn").hide();
 // $("#genmsg").show();
        html2canvas($("#page1-div")[0], { allowTaint: true }).then(function(canvas) {
 
            calculatePDF_height_width("#page1-div",0);
            var imgData = canvas.toDataURL("image/png", 1.0);
 pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
            pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, HTML_Width, HTML_Height);
 
        });
 
        // html2canvas($(".print-wrap:eq(1)")[0], { allowTaint: true }).then(function(canvas) {
 
        //     calculatePDF_height_width(".print-wrap",1);
 
        //     var imgData = canvas.toDataURL("image/png", 1.0);
        //     pdf.addPage(PDF_Width, PDF_Height);
        //     pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, HTML_Width, HTML_Height);
 
        // });
 
        html2canvas($("#page2-div")[0], { allowTaint: true }).then(function(canvas) {
 
            calculatePDF_height_width("#page2-div",1);
 
            var imgData = canvas.toDataURL("image/png", 1.0);
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, HTML_Width, HTML_Height);
 
 
           
                //console.log((page_section.length-1)+"==="+index);
                setTimeout(function() {
 
                    //Save PDF Doc 
                    pdf.save("HTML-Document.pdf");
 
                    // //Generate BLOB object
                    // var blob = pdf.output("blob");
 
                    // //Getting URL of blob object
                    // var blobURL = URL.createObjectURL(blob);
 
                    // //Showing PDF generated in iFrame element
                    // var iframe = document.getElementById('sample-pdf');
                    // iframe.src = blobURL;
 
                    // //Setting download link
                    // var downloadLink = document.getElementById('pdf-download-link');
                    // downloadLink.href = blobURL;
 
 // $("#sample-pdf").slideDown();
 
 
 // $("#downloadbtn").show();
 // $("#genmsg").hide();
                }, 0);
        });
    };



</script>

</head>

<body bgcolor="#A0A0A0" vlink="blue" link="blue" style="text-align: center;">



<div align="left" id="page1-div" style="position:relative;width:918px;height:1188px;margin-left: auto;
    margin-right: auto;background: #ffff;page-break-after: always;">
<!-- <div style="text-align: left;width: 918px;height: auto;"> -->	
<img style="width: 600px;height: auto;margin-left: 80px;" src="img/masslogo.png" alt="background image"/>
<!-- </div> -->
<div style="text-align: left;width: 918px;height: 540px;">

<p style="position:absolute;top:150px;left:80px;white-space:nowrap;font-size:48px;font-family:Times;color:#005527;" ><b>MASS HSE CONSULTANT&#160;</b></p>


<!-- <p style="position:absolute;top:200px;left:200px;white-space:nowrap;font-size:28px;font-family:Times;color:#000000;" >&#160;</p>
 --><p style="position:absolute;top:230px;left:300px;white-space:nowrap;font-size:28px;font-family:Times;color:#000000;" >Is certify that’s&#160;&#160;</p>


<p style="position:absolute;top:270px;left:162px;white-space:nowrap;font-size:30px;font-family:Times;color:#000000;" >MR.————————————&#160;</p>
<p style="position:absolute;top:310px;left:162px;white-space:nowrap;font-size:30px;font-family:Times;color:#000000;" >Passport&#160;NO.————————-&#160;</p>


<p style="position:absolute;top:354px;left:240px;white-space:nowrap;font-size:30px;font-family:Times;color:#000000;" >Has successfully completed the&#160;&#160;</p>
<p style="position:absolute;top:390px;left:162px;white-space:nowrap;font-size:30px;font-family:Times;color:#000000;" >Training&#160;Topic: &#160;</p>


<p style="position:absolute;top:426px;left:240px;;white-space:nowrap;font-size:30px;font-family:Times;color:#000000;" >Competent Person&#160;&#160;</p>
<p style="position:absolute;top:462px;left:162px;white-space:nowrap;font-size:30px;font-family:Times;color:#000000;" >Training code&#160;: &#160;</p>
<p style="position:absolute;top:498px;left:162px;white-space:nowrap;font-size:30px;font-family:Times;color:#000000;" >Training course Completion Date</p>
<p style="position:absolute;top:544px;left:240px;white-space:nowrap;font-size:30px;font-family:Times;color:#000000;" >——/——/———&#160;</p>
<!-- <p style="position:absolute;top:570px;left:272px;white-space:nowrap;font-size:30px;font-family:Times;color:#000000;" >——/——/———&#160;</p> -->
<!-- <p style="position:absolute;top:727px;left:466px;white-space:nowrap;font-size:30px;font-family:Times;color:#000000;" >&#160;</p> -->


<p style="position:absolute;top:620px;left:30px;white-space:nowrap;font-size:31px;font-family:Times;color:#000000;" >And has demonstrated&#160;proficiency the&#160;subject by passing&#160;</p>
<p style="position:absolute;top:656px;left:30px;white-space:nowrap;font-size:31px;font-family:Times;color:#000000;" >the examination in accordance with terms and conditions&#160;</p>
<p style="position:absolute;top:692px;left:250px;white-space:nowrap;font-size:31px;font-family:Times;color:#000000;" >of &#160;Mass HSE consultant &#160;&#160;</p>


<p style="position:absolute;top:728px;left:121px;white-space:nowrap;font-size:25px;font-family:Times;color:#000000;" >approved NASP,STI,IADC,AHA,OSHA&amp;IOSH trainers&#160;&#160;</p>


<p style="position:absolute;top:740px;left:230px;white-space:nowrap;font-size:31px;font-family:Times;color:#000000;" >&#160;</p>
</div>
<!-- <p style="position:absolute;top:1007px;left:58px;white-space:nowrap" class="ft15">Training Manager&#160;Signature&#160;</p>
<p style="position:absolute;top:1102px;left:61px;white-space:nowrap" class="ft16"><b>Valid for&#160;1year&#160;</b></p> -->

<div style="text-align: center;top:800px;width: 800px;height: auto;">	
<img style="width: 800px;height: auto;" src="img/footer.png" alt="background image"/>
</div>

<p style="position:absolute;top:1060px;left:450px;white-space:nowrap;font-size:16px;font-family:Times;color:#000000;" ><b>Serial&#160;no: &#160;MASS&#160;-0Y-0M-010D&#160;</b></p>
</div>



<div id="page2-div" style="position:relative;width:918px;height:1188px;margin-left: auto;
    margin-right: auto;background: #ffff;page-break-after: always;">
<img width="918" height="1188" src="img/masslogo.png" alt="background image"/>
<p style="position:absolute;top:229px;left:71px;white-space:nowrap" class="ft20"><b>*This document is an important&#160;and necessary&#160;</b></p>
<p style="position:absolute;top:270px;left:67px;white-space:nowrap" class="ft20"><b>document&#160;to complete the&#160;training described in&#160;</b></p>
<p style="position:absolute;top:311px;left:115px;white-space:nowrap" class="ft20"><b>it and is an official document accepted by&#160;&#160;</b></p>
<p style="position:absolute;top:351px;left:224px;white-space:nowrap" class="ft20"><b>MASS HSE&#160;CONSULTANT&#160;&#160;</b></p>
<p style="position:absolute;top:392px;left:459px;white-space:nowrap" class="ft20"><b>&#160;</b></p>
<p style="position:absolute;top:433px;left:69px;white-space:nowrap" class="ft20"><b>**In case of loss or&#160;damage, please call directly&#160;</b></p>
<p style="position:absolute;top:473px;left:259px;white-space:nowrap" class="ft20"><b>at the following number&#160;</b></p>
<p style="position:absolute;top:514px;left:193px;white-space:nowrap" class="ft20"><b>&#160;+ 965-69616316/+201110668239&#160;&#160;</b></p>
<p style="position:absolute;top:555px;left:59px;white-space:nowrap" class="ft21"><b>to do&#160;the necessary work and issue a new certificate.&#160;</b></p>
<p style="position:absolute;top:593px;left:459px;white-space:nowrap" class="ft21"><b>&#160;</b></p>
<p style="position:absolute;top:630px;left:63px;white-space:nowrap" class="ft20"><b>***</b></p>
<p style="position:absolute;top:633px;left:121px;white-space:nowrap" class="ft21"><b>It is forbidden to duplicate or&#160;take copies of this&#160;</b></p>
<p style="position:absolute;top:671px;left:76px;white-space:nowrap" class="ft21"><b>document except with the prior&#160;written consent of&#160;</b></p>
<p style="position:absolute;top:711px;left:132px;white-space:nowrap" class="ft21"><b>the&#160;Training Manager&#160;or&#160;by notifying&#160;him</b></p>
<p style="position:absolute;top:708px;left:776px;white-space:nowrap" class="ft20"><b>. &#160;&#160;</b></p>
<p style="position:absolute;top:1145px;left:524px;white-space:nowrap" class="ft22"><b>Serial&#160;no: &#160;MASS&#160;-0Y-0M-010D&#160;</b></p>
<p style="position:absolute;top:935px;left:88px;white-space:nowrap" class="ft23">Main&#160;office:&#160;floor&#160;6&#160;-office&#160;13-&#160;Noor complex&#160;-&#160;Beirut&#160;Street-&#160;Block&#160;9&#160;–&#160;Hawally&#160;Gov.&#160;-Kuwait&#160;&#160;</p>
<p style="position:absolute;top:950px;left:88px;white-space:nowrap" class="ft24"><a href="Tel:+965-69616316">Tel:+965-69616316</a></p>
<p style="position:absolute;top:950px;left:196px;white-space:nowrap" class="ft23"><a href="Tel:+965-69616316">&#160;</a></p>
<p style="position:absolute;top:964px;left:88px;white-space:nowrap" class="ft23">Branch&#160;office: floor&#160;5-&#160;office&#160;5-&#160;tower&#160;no&#160;27&#160;–Sarai area-Alexandria&#160;Gov.&#160;-Egypt&#160;&#160;</p>
<p style="position:absolute;top:978px;left:88px;white-space:nowrap" class="ft24"><a href="Tel:+2-010-12059055">Tel: &#160;+2-010-12059055</a></p>
<p style="position:absolute;top:978px;left:214px;white-space:nowrap" class="ft23"><a href="Tel:+2-010-12059055">&#160;</a>&#160;&#160;&#160;/&#160;+2-003-5488968&#160;&#160;&#160;&#160;Fax:&#160;&#160;+2-003-5488968&#160;</p>
<p style="position:absolute;top:992px;left:88px;white-space:nowrap" class="ft23">Info@masshseconsultant.com&#160; &#160; &#160;&#160;&#160; &#160; &#160;&#160;&#160; &#160; &#160;&#160;&#160; &#160; &#160;&#160;&#160; &#160;</p>
<p style="position:absolute;top:992px;left:341px;white-space:nowrap" class="ft24"><a href="http://www.masshseconsultant.com">www.masshseconsultant.com</a></p>
<p style="position:absolute;top:992px;left:501px;white-space:nowrap" class="ft23"><a href="http://www.masshseconsultant.com">&#160;</a></p>
</div>


<div style="margin-top: 150px;">
<b id="cmd" style="color: #ffff;background: black;cursor: pointer;" onclick="generatePDF();">Generate PDF</b>
</div>


</body>
</html>
