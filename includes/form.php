<!DOCTYPE html>
<html>
	<head>
		<title>form</title>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
/*$(document).ready(function(){
    $("fieldset:not(#div1)").hide();
});*/

</script>

	</head>
	<body>
		<form method="POST" action="resume.php">
			 <fieldset class="sectionwrap" id="div1">
                    <legend><strong>Basic</strong></legend>
                    <div>
                        <div class="labels">
                            Name :
                        </div>
                        <input name="name" type="text" id="name" title="Displayed at the top of your CV" class="styles"  />
						
					</div>
                    <div>
                        <div class="labels">
                            Email id :</div>
                        <input name="mail" type="text" id="mail" title="Primary mode of communication, ensure its correctness!" class="styles " />
                    </div>
                    <div>
                        <div class="labels">
                            Telephone :
                        </div>
                        <input name="phone" type="text" id="phone" title="Current Mobile No." class="styles " />
                    </div>
                    <div>
                        <div class="labels">
                            Father's Name :
                        </div>
                        <input name="fathersname" type="text" id="fathersname" title="As mentioned in other Official Documents" class="styles " style="" />
                    </div>
                    <div>
                        <div class="labels">
                            Objective :
                        </div>
                        <textarea name="objective" rows="2" cols="20" id="objective" title="precise and clearly describing your career objective" >
						</textarea>
                    </div>
                </fieldset>
				
				 <fieldset class="sectionwrap" id="div2">
                    <legend><strong>Educational Details</strong></legend>
                    <div>
                        <table id="choosediploma" border="0">
		<tr>
			<td><input id="choosediploma_0" type="radio" name="choosediploma" value="1"
						onclick="showDiploma(1)" /><label for="choosediploma_0">Diploma</label></td>
			<td><input id="choosediploma_1" type="radio" name="choosediploma" value="0" 
						onclick="showDiploma(0)" /><label for="choosediploma_1">Non Diploma Holder</label></td>
		</tr>
	</table>
                    </div>
                    <div>
                        <h4>
                            Class 10th</h4>
                    </div>
                    <div class="labels">
                        Percentage :</div>
                    <div>
                        <input name="percentage10" type="text" id="percentage10" title="input your 10th class percentage" class="styles" />
                    </div>
                    <div class="labels">
                        Passing School(with address) :</div>
                    <div>
                        <input name="school10" type="text" id="school10" title="School from which you passed your 10th class" class="styles" style="" />
                        <div class="labels">
                            Passing Year :</div>
                        <input name="year10" type="text" id="year10" title="as printed in your class 10th passing certificate" class="styles" />
                    </div>
                    
				<div id="optional_12">
					<div>
                        <h4>
                            Class 12th</h4>
                    </div>
                    <div class="labels">
                        Percentage :</div>
                    <div>
                        <input name="percentage12" type="text" id="percentage12" title="input your 12th class percentage" class="styles" />
                    </div>
                    <div class="labels">
                        Passing School(with address) :</div>
                    <div>
                        <input name="school12" type="text" id="school12" title="School from which you passed your 12th class" class="styles" style="" />
                        <div class="labels">
                            Passing Year :</div>
                        <input name="year12" type="text" id="year12" title="as printed in your class 12th passing certificate" class="styles" />
                    </div>
                </div>				
				<div id="optional_diploma">
					<div>
                        <h4>
                            Diploma</h4>
                    </div>
                    <div class="labels">
                        Percentage :</div>
                    <div>
                        <input name="percentage_diploma" type="text" id="percentage_diploma" title="input your 12th class percentage" class="styles" />
                    </div>
                    <div class="labels">
                        Passing Diploma College(with address) :</div>
                    <div>
                        <input name="school_diploma" type="text" id="school_diploma" title="School from which you passed your 12th class" class="styles" style="" />
                        <div class="labels">
                            Passing Year :</div>
                        <input name="year_diploma" type="text" id="year_diploma" title="as printed in your class 12th passing certificate" class="styles" />
                    </div>
					<div>
                        <div class="labels">
                            Diploma Name :</div>
                        <input name="name_diploma" type="text" id="name_diploma" title="name of diploma" class="styles" />
                    </div>
                </div>
                    <table>
                        <tr>
                            <td>
                                <h4>
                                    College</h4>
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Percentage :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="collegepercentage" type="text" id="collegepercentage" title="till date aggregate percentage in college" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Passing college :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="college" type="text" id="college" title="Name of the college" class="styles" style="" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Passing Year :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="collegeyear" type="text" id="collegeyear" title="year of passing out from college" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Current Semester :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="collegesem" type="text" id="collegesem" title="current semester in which you are studying" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Course Name with Branch:
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="collegecourse" type="text" id="collegecourse" title="course name with your branch" class="styles" style="" />
                            </td>
                        </tr>
                    </table>
                </fieldset>

				
                <fieldset class="sectionwrap" id="div3">
                    <legend><strong>Summer Training</strong></legend>
                    <table>
                        <tr>
                            <td class="labels">
                                Company Name :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="stcomapnyname" type="text" id="stcomapnyname" title="Name of the company or institution in which you did your Summer training" class="styles" style="" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Duration(from month - to month, year) :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="stduration" type="text" id="stduration" title="Duration of your training" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Project Undertaken :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="stproject" type="text" id="stproject" title="Name of the project undertaken in training" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Technology Used :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="sttechnology" type="text" id="sttechnology" title="Technologies used in the abovementioned project" class="styles" />
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <fieldset class="sectionwrap" id="div4">
                    <legend><strong>Projects Undertaken</strong></legend>
                    <br />
                    Final Year Project :<br />
                    <input name="projectfinalyear" type="text" id="projectfinalyear" title="Project undertaken in final year" class="styles" />
                   
                    <button name="btngenerateproject" type="button" value="Add Extra Project" id="btngenerateproject" onclick="generateTextbox('project')">Add Extra Project</button>
                </fieldset>
                <fieldset class="sectionwrap" id="div5">
                    <legend><strong>Achievements</strong></legend>
                    
                    <br />
                    <button name="btngenerateaccomplishment" type="button" value="Add Achievement" id="btngenerateaccomplishment" onclick="generateTextbox('achievement')">Add Achievement</button>
                </fieldset>
                <fieldset class="sectionwrap" id="div6">
                    <legend><strong>Skill Set</strong></legend>
                    <br />
                    Enter Skills (1 mandatory) :<br />
                    <input name="mandatoryskill" type="text" id="mandatoryskill" title="Technical Skills" class="labels" />
                    
                    <button name="btngenerateskill" type="button" value="Add Skill" id="btngenerateskill" onclick="generateTextbox('skill')">Add Skill</button>
                </fieldset>
                <fieldset class="sectionwrap" id="div7">
                    <legend><strong>Areas of Interest</strong></legend>
                    <br />
                    
                    <button name="btngenerateinterest" type="button" value="Add Interest" id="btngenerateinterest" onclick="generateTextbox('interest')">Add Interest</button>
                </fieldset>
                <fieldset class="sectionwrap" id="div8">
                    <legend><strong>Personal Details</strong></legend>
                    <table>
                        <tr>
                            <td class="labels">
                                Date Of Birth :
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                <input name="dob" type="text" id="dob" title="Date Of Birth as mentioned in passing certificate" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Land Line No. :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="landline" type="text" id="landline" title="Fixed telephone number" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Alternate No. :
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="otherno" type="text" id="otherno" title="mobile or another alternate contact number" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Nationality :
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                <input name="nationality" type="text" id="nationality" title="Country of which you&#39;re a legal citizen" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Permanent Address :
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                <input name="permanentaddress" type="text" id="permanentaddress" title="Permanent Residential Address" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Current Address :
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                <input name="currentaddress" type="text" id="currentaddress" title="Current Residential Address" class="styles" />
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <fieldset class="sectionwrap" id="div9">
                    <legend><strong>Finish</strong></legend>
                    <table>
                        <tr>
                            <td class="labels">
                                Date :
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                <input name="date" type="text" id="date" title="Date of creation of Resume" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Time :
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                <input name="time" type="text" id="time" title="Time of creation of Resume" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Place :
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                <input name="place" type="text" id="place" title="Location where Resume is being created" class="styles" />
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                Select Resume Template :
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                
                                <table id="TemplateList" border="0">
		<tr>
			<td><input id="TemplateList_0" type="radio" name="TemplateList" value="1" />
			<label for="TemplateList_0"><img src = "images/template1.JPG" align = "center"/></label>
			</td><td><input id="TemplateList_1" type="radio" name="TemplateList" value="2" />
			<label for="TemplateList_1"><img src = "images/template2.JPG" align = "center"></label>
			</td><td><input id="TemplateList_2" type="radio" name="TemplateList" value="3" />
			<label for="TemplateList_2"><img src = "images/template3.png" align = "center"></label>
			</td><td><input id="TemplateList_3" type="radio" name="TemplateList" value="4" />
			<label for="TemplateList_3"><img src = "images/template4.png" align = "center"></label></td>
		</tr>
	</table>
                           </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                <input type="submit" name="btn" value="Generate Resume" id="btn" />
                            </td>
                        </tr>
                    </table>
                </fieldset>
		</form>
	</body>
</html>