
{% extends "gpa_elevator/templates/index.php" %}

{% block title %}
    <title>  {% block col_title %} {% endblock %}- {% block uni_title %}Muk {% endblock %} | Gpa Elevator</title>
{% endblock %}


{% block  nav %}
<div class="container-fluid" id="universitynamebox">
  <h3><b> {% block university_name %}MAKERERE UNIVERSITY {% endblock %}</b></h3>
</div>
{%  endblock %}


{% block content %}
<div class="container-fluid">
  <div class="row text-center">
    {% block main_content %}
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" id="std-courses-box" >

      <div class="std-courses">
        <strong><h1 class="col_name">{% block col_name %} COLLEGE OF ENGINEERING, DESIGN, ART & TECHNOLOGY (CEDAT) {% endblock %}</h1></strong>
{% block col_sch_1 %}
          {% block sch1_title_box %}<div class="sch_title_box"><h2 class="sch_title"><b>{% block sch1_title %} SCHOOL OF ENGINEERING {% endblock %}</b> </h2></div> {% endblock %}
        {% block sch_1_dept_1 %}

        {% block dept_1 %}
         <strong><h3 class="dept_name"> {% block dept1_name %} Department of Electrical & Computer Engineering  {% endblock %}</h3></strong>
         {% endblock %}
         
         {% block faculty_course_1 %}
         <div class="dept-courses">
                   <ul class="courses">
                        <li>
                          {% block dept_1_course_list_1 %}
                          
                          <input type="checkbox" class="course-checkbox" id="dept_1_course1-checkbox" autocomplete="off" >
                          <label for="dept_1_course1-checkbox" class="course_label" >
                            <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_1_course1" aria-expanded="false"><b>{% block dept_1_course1_name %} Bachelor of science in Computer Engineering {% endblock %}</b>
                            </h4>
                        </label>
                       
                               <ul class="collapse"  id="dept_1_course1">
                                 {% block dept_1_course_1_year_1 %}
                                 <li class="std-yr"><b><i>YEAR ONE</i></b>
                                       <ul>
                                         <li>
                                       <strong><b class="sem"><i>SEMESTER ONE</i></b></strong>
                                       <ul>
                                         {% block dept_1_course_1_courseunit_list_1 %}
                                         <li class="course_units"><b><i><a  href="EMT1101.html">EMT1101-Engineering Math I</a></i></b></li>
                                         <li class="course_units"><b><i><a href="CMP1101-electronics1.html"> CMP1101-Electronics I</a></i></b></li>
                                         <li class="course_units"><b><i><a  href="ethics.html">CMP1102-Computer Engineering Ethics</a></i></b></li>
                                         <li class="course_units"><b><i><a  href="CMP1103-ict.html">CMP1103-Information & Communication Technology</a></i></b></li>
                                         <li class="course_units"><b><i><a href="communication skills.html">UNI1001-Communication Skills </a></i></b></li>
                                         {% endblock %}
                                       </ul>
                                     </li>
                                 <li>
                                     <b class="sem"><i>SEMESTER TWO</i></b>
                                     <ul>
                                       {% block dept_1_course_1_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a  href="EMT1201.html">EMT1201-Engineering Math II</a></i></b></li>
                                        <li class="course_units"><b><i><a  href = "computer programming fundamentals-muk.html">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                                        <li class="course_units"><b><i><a  href="CMP1202-electronics2.html">CMP1202-Electronics II</a></i></b></li>
                                        <li class="course_units"><b><i><a  href="CMP1203-Computer-architecure&organisation.html">CMP1203-Computer Architecture & Organization</a></i></b></li>
                                        <li class="course_units"><b><i><a  href="ELE1202-electricity&magnetism.html">ELE1202-Electricity & Magnetism </a></i></b></li>
                                     {% endblock %}
                                       </ul>
                                   </li>
                                   </ul>
                                 </li>
                                 {% endblock dept_1_course_1_year_1 %}
   
                                 {% block dept_1_course_1_year_2 %}
                                 <li class="std-yr"><b><i>YEAR TWO</i></b>
                           <ul>
                               <li>
                                   <b class="sem"><i>SEMESTER ONE</i></b>
                                     <ul>
                                       {% block dept_1_course_1_courseunit_list_3 %}
                                       <li class="course_units"><b><i><a  href="#">EMT2101-Engineering Math III</a></i></b></li>
                                       <li class="course_units"><b><i><a  href="software-engineering.html">CMP2101-Software Engineering</a></i></b></li>
                                       <li class="course_units"><b><i><a  href="CMP2102-electric _circuits_and_signals.html">CMP2102-Electric Circuits and Signals</a></i></b></li>
                                       <li class="course_units"><b><i><a  href="CMP2103-OOP.html">CMP2103-Object Oriented Programming</a></i></b></li>
                                       <li class="course_units"><b><i><a  href="socialogy-for-technology.html">TEC2101-Sociology For Technology</a></i></b></li>
                                     {% endblock %}
                                     </ul>
                               </li>
                                 <li>
                                   <b class="sem"><i>SEMESTER TWO</i></b>
                                     <ul>
                                     {% block dept_1_course_1_courseunit_list_4 %}
                                      <li class="course_units"><b><i><a  href="#">CMP2201-Discrete Mathematics and Random Processes</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMP2202-Analysis and Design Of Algorithms</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMP2203-Digital Logic</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMP2204-Operating Systems Technologies</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMP2205-Computer Networks</a></i></b></li>
                                     {% endblock %}
                                     </ul>
                                 </li>
                           </ul>
                                 </li>
                                 {% endblock dept_1_course_1_year_2 %}
   
                                 {% block dept_1_course_1_year_3 %}
                                 <li class="std-yr"><b><i>YEAR THREE</i></b>
                           <ul>
                             <li>
                               <b class="sem"><i>SEMESTER ONE</i></b>
                                   <ul>
                                     {% block dept_1_course_1_courseunit_list_5 %}
                                     <li class="course_units"><b><i><a href="#">CMP3101-Database Systems</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">CMP3104-Computer Based Medical Systems</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">ELE3101-Electro Magnetic Fields</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">ELE3102-Applied Analouge Electronics</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">EMT3105-Engineering Mathematics V</a></i></b></li>
                                     {% endblock %}
                                   </ul>
                             </li>
                             <li>
                                 <b class="sem"><i>SEMESTER TWO</i></b>
                                   <ul>
                                   {% block dept_1_course_1_courseunit_list_6 %}
                                     <li class="course_units"><b><i><a href="#">CMP3201-Embedded Systems</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">CMP3202-Human Computer Interaction</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">CMP3203-Computer Systems Maintenance</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">CMP3204-Distributed Information Systems</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">CMP3205-Intelligent Systems </a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">CMP3206-Saftey Critical System </a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">CMP3207-Sustainable Energy Systems </a></i></b></li>
                                   {% endblock %}
                                   </ul>
                            </li>
                         </ul>
                                 </li>
                                 {% endblock dept_1_course_1_year_3 %}
                                 {% block dept_1_course_1_year_4 %}
                                 <li class="std-yr"><b><i>YEAR FOUR</i></b>
                           <ul>
                             <li>
                               <b class="sem"><i>SEMESTER ONE</i></b>
                                   <ul>
                                   {% block dept_1_course_1_courseunit_list_7 %}
                                     <li class="course_units"><b><i><a href="#">CMP4101-Digital Signal Processing</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">CMP4102-Instrumention and Control Engineering</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems and Network Security</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and Video Processing</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">TEC4101-Research Methods </a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">TEC4102-Principles of Management </a></i></b></li>
                                   {% endblock %}
                                   </ul>
                             </li>
                             <li>
                                 <b class="sem"><i>SEMESTER TWO</i></b>
                                   <ul>
                                   {% block dept_1_course_1_courseunit_list_8 %}
                                     <li class="course_units"><b><i><a href="#">CMP4201-Research Project</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">CMP4204-Wireless Technologies</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">CMP4205-Audio and Speech Signal Processing</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">ELE4201-Project </a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">TEC4201-Entrepreneurship </a></i></b></li>
                                   {% endblock %}
                                   </ul>
                            </li>
                         </ul>
                                 </li>
                                 {% endblock dept_1_course_1_year_4 %}
                               </ul>
                        </li>
                     {% endblock %}
                     {% block dept_1_course_list_2 %}
                        <li>
                          <input type="checkbox" class="course-checkbox" id="dept_1_course2-checkbox" autocomplete="off" >
                          <label for="dept_1_course2-checkbox" class="course_label" >
                           <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_1_course2" aria-expanded="false"><b>{% block dept_1_course2_name %} Bachelor of science in Elecrical Engineering {% endblock %}</b>
                          </h4> 
                        </label>   
                           <ul class="collapse"  id="dept_1_course2">
                                 {% block dept_1_course_2_year_1 %}
                                 <li class="std-yr"><b><i>YEAR ONE</i></b>
                                    <ul>
                               <li>
                                   <b class="sem"><i>SEMESTER ONE</i></b>
                                   <ul>
                                   {% block dept_1_course_2_courseunit_list_1 %}
                                     <li class="course_units"><b><i><i class="fas fa-file-pdf"></i><a href="EMT1101.html">EMT1101-Engineering Mathematics I</a></i></b></li>
                                     <li class="course_units"><b><i><i class="far fa-file-pdf"></i><a href="ELE1102-Physical Electronics.html">ELE1104-Physical Electronics</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">ELE1105-Circuit Theory </a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">CMP1103-Information & Communication Technology</a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">ELE1112-Introduction To Electrical Engineering and Society </a></i></b></li>
                                     <li class="course_units"><b><i><a href="#">UNI1001-Communication Skills </a></i></b></li>
                                   {% endblock %}
                                   </ul>
                                 </li>
                             <li>
                                 <b class="sem"><i>SEMESTER TWO</i></b>
                                 <ul>
                                   {% block dept_1_course_2_courseunit_list_2 %}
                                    <li class="course_units"><b><i><a href="#">EMT1201-Engineering Mathematics II</a></i></b></li>
                                    <li class="course_units"><b><i><a href="#">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                                    <li class="course_units"><b><i><a href="#">ELE1201-Introduction To Digital Electronics</a></i></b></li>
                                    <li class="course_units"><b><i><a href="ELE1204-Statics & Dynamics.html">ELE1204-Statics & Dynamics</a></i></b></li>
                                    <li class="course_units"><b><i><a href="#">ELE1205-Electrical Materials </a></i></b></li>
                                    <li class="course_units"><b><i><a href="socialogy-for-technology.html">TEC1202-Introduction To Sociology </a></i></b></li>
                                   {% endblock %}
                                 </ul>
                               </li>
                               </ul>
                                 </li>
                                 {% endblock dept_1_course_2_year_1 %}
   
                                 {% block dept_1_course_2_year_2 %}
                                 <li class="std-yr"><b><i>YEAR TWO</i></b>
                       <ul>
                           <li>
                               <b class="sem"><i>SEMESTER ONE</i></b>
                                 <ul>
                                 {% block dept_1_course_2_courseunit_list_3 %}
                                   <li class="course_units"><b><i><a href="#">EMT2101-Engineering Mathematics III</a></i></b></li>
                                   <li class="course_units"><b><i><a href="#">CMP2103-Object Oriented Programming</a></i></b></li>
                                   <li class="course_units"><b><i><a href="#">ELE2102-Electronic Circuits</a></i></b></li>
                                   <li class="course_units"><b><i><a href="#">ELE2111-Network Theory</a></i></b></li>
                                   <li class="course_units"><b><i><a href="#">ELE2112-Electromagnetics</a></i></b></li>
                                {% endblock %}
                                 </ul>
                           </li>
                             <li>
                               <b class="sem"><i>SEMESTER TWO</i></b>
                                 <ul>
                                   {% block dept_1_course_2_courseunit_list_4 %}
                                  <li class="course_units"><b><i><a href="#">EMT2201-Engineering Mathematics IV</a></i></b></li>
   
   
                                  <!--<li><b><i><a style="color:blue;" href = "programming.html">ELE2201-Power Systems Theory</a></i></b></li>
                                  <li><b><i><a style="color:blue;" href="#">ELE2203-Network Theory I</a></i></b></li>
                                  <li><b><i><a style="color:blue;" href="#">ELE2204-Economics For Elecrical Engineers</a></i></b></li>-->
                                  <li class="course_units"><b><i><a href="#">ELE2211-Electromagnetic Fields</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE2212-Electrical Energy Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE2213-Instrumentation</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">TEC2202-Technology,Ethics & Human Rights</a></i></b></li>
                                   {% endblock %}
                                 </ul>
                             </li>
                       </ul>
                                 </li>
                                 {% endblock dept_1_course_2_year_2 %}
   
                                 {% block dept_1_course_2_year_3 %}
                                 <li class="std-yr"><b><i>YEAR THREE</i></b>
                       <ul>
                         <li>
                           <b class="sem"><i>SEMESTER ONE</i></b>
                               <ul>
                                 {% block dept_1_course_2_courseunit_list_5 %}
                                 <li class="course_units"><b><i><a href="#">COE3100-Entrepreneurship</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE3102-Applied Analogue Electronics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE3103-Applied Digital Electronics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE3112-Radio Wave Propagation & Antennas</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE3113-Power Systems Theory</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE3114-Electrical Machines & Drives I</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">TEL3111-Communication Theory</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">LAW1104-Law of Contracts </a></i></b></li>
                                 {% endblock %}
                               </ul>
                         </li>
                         <li>
                             <b class="sem"><i>SEMESTER TWO</i></b>
                               <ul>
                                 {% block dept_1_course_2_courseunit_list_6 %}
                                 <li class="course_units"><b><i><a href="#">ELE3211-Industrial Electronics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE3202-Control Engineering</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE3203-Power Electronics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE3204-Communication Engineering I</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE3205-Electrical Machines & Drives II</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE3215-Power Systems Engineering</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">EMT3201-Engineering Mathematics VI</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">TEL3214-Computer Communication Networks</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE3216-Energy Conversion And Generation</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">TEL3212-Digital Communications Systems</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">TEL3217-Systems Engineering</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">Mobile Communication Systems</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">COE1102-Fundamental Acccounts Principles</a></i></b></li>
                               {% endblock %}
   
                               </ul>
                        </li>
                     </ul>
                                 </li>
                                 {% endblock dept_1_course_2_year_3 %}
   
                                 {% block dept_1_course_2_year_4 %}
                                 <li class="std-yr"><b><i>YEAR FOUR</i></b>
                       <ul>
                         <li>
                           <b class="sem"><i>SEMESTER ONE</i></b>
                               <ul>
                                 {% block dept_1_course_2_courseunit_list_7 %}
                                 <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#"></a></i></b></li>
                               {% endblock %}
                               </ul>
                         </li>
                         <li>
                             <b class="sem"><i>SEMESTER TWO</i></b>
                               <ul>
                                 {% block dept_1_course_2_courseunit_list_8 %}
                               <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                               <li class="course_units"><b><i><a href="#"></a></i></b></li>
                             {% endblock %}
                             </ul>
               </li>
               </ul>
                                 </li>
                                 {% endblock dept_1_course_2_year_4 %}
                                 
                                 {% block dept_1_course_2_year_5 %}
                                 <li class="std-yr"><b><i>YEAR FIVE</i></b>
                                   <ul>
                                     <li>
                                       <b class="sem"><i>SEMESTER ONE</i></b>
                                           <ul>
                                             {% block dept_1_course_2_courseunit_list_9 %}
                                             <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                           {% endblock %}
                                           </ul>
                                     </li>
                                     <li>
                                         <b class="sem"><i>SEMESTER TWO</i></b>
                                           <ul>
                                             {% block dept_1_course_2_courseunit_list_10 %}
                                           <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                         {% endblock %}
                                         </ul>
                           </li>
                           </ul>
                                             </li>
                                 
                                 {% endblock %}
                              </ul>
                        </li> 
                     {% endblock %}       
                     
                     {% block dept_1_course_list_3 %}
                         <li>
                          <input type="checkbox" class="course-checkbox" id="dept_1_course3-checkbox" autocomplete="off" >
                          <label for="dept_1_course3-checkbox" class="course_label" >
                           <h4 class ="course_name" data-toggle="collapse" data-target="#dept_1_course3" aria-expanded="false"><b>{% block dept_1_course3_name %} Bachelor of Science In Telecommunication Engineering {% endblock %}</b>
                          </h4>
                          </label>
                              <ul class="collapse" id="dept_1_course3">
                               {% block dept_1_course_3_year_1 %}
                                 <li class="std-yr"><b><i>YEAR ONE</i></b>
                                     <ul>
                                       <li>
                                           <b class="sem"><i>SEMESTER ONE</i></b>
                                           <ul>
                                           {% block dept_1_course_3_courseunit_list_1 %}
                                             <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                           {% endblock %}  
                                           </ul>
                                         </li>
                                     <li>
                                       <b class="sem"><i>SEMESTER TWO</i></b>
                                         <ul>
                                         {% block dept_1_course_3_courseunit_list_2 %}
                                           <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                         {% endblock %}
                                         </ul>
                                       </li>
                                       </ul>
                                 </li>
                                 {% endblock %}
                                 {% block dept_1_course_3_year_2 %}
                                 <li class="std-yr"><b><i>YEAR TWO</i></b>
                               <ul>
                                   <li>
                                       <b class="sem"><i>SEMESTER ONE</i></b>
                                         <ul>
                                         {% block dept_1_course_3_courseunit_list_3 %}
                                           <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                         {% endblock %}
                                         </ul>
                                   </li>
                                     <li>
                                       <b class="sem"><i>SEMESTER TWO</i></b>
                                         <ul>
                                         {% block dept_1_course_3_courseunit_list_4 %}
                                           <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                         {% endblock %}
                                         </ul>
                                     </li>
                               </ul>
                                 </li>
                                 {% endblock %}
                                 {% block dept_1_course_3_year_3 %}
                                 <li class="std-yr"><b><i>YEAR THREE</i></b>
                               <ul>
                                 <li>
                                   <b class="sem"><i>SEMESTER ONE</i></b>
                                       <ul>
                                         {% block dept_1_course_3_courseunit_list_5 %}
                                         <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                       {% endblock %}
                                       </ul>
                                 </li>
                                 <li>
                                   <b class="sem"><i>SEMESTER TWO</i></b>
                                       <ul>
                                         {% block dept_1_course_3_courseunit_list_6 %}
                                         <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                       {% endblock %}
                                       </ul>
                                </li>
                             </ul>
                                 </li>
                                 {% endblock %}
                                 {% block dept_1_course_3_year_4 %}
                                 <li class="std-yr"><b><i>YEAR FOUR</i></b>
                               <ul>
                                 <li>
                                   <b class="sem"><i>SEMESTER ONE</i></b>
                                       <ul>
                                         {% block dept_1_course_3_courseunit_list_7 %}
                                         <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                       {% endblock %}
                                       </ul>
                                 </li>
                                 <li>
                                     <b class="sem"><i>SEMESTER TWO</i></b>
                                       <ul>
                                         {% block dept_1_course_3_courseunit_list_8 %}
                                         <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                       {% endblock  %}
                                       </ul>
                                </li>
                             </ul>
                                 </li>
                                 {% endblock %}
                              </ul>
                       </li>
                     {% endblock %}
                     {% block dept_1_course_list_4 %}
                       <li>
                        <input type="checkbox" class="course-checkbox" id="dept_1_course4-checkbox" autocomplete="off" >
                        <label for="dept_1_course4-checkbox" class="course_label" >
                             <h4 class ="course_name" data-toggle="collapse" data-target="#dept_1_course4" aria-expanded="false"><b>{% block dept_1_course4_name %} Bachelor Of Science In Biomedical Engineering{% endblock %}</b></h4>
                        </label>  
                             <ul class="collapse" id="dept_1_course4">
                               {% block dept_1_course_4_year_1 %}
                                 <li class="std-yr"><b><i>YEAR ONE</i></b>
                                     <ul>
                                       <li>
                                           <b class="sem"><i>SEMESTER ONE</i></b>
                                           <ul>
                                           {% block dept_1_course_4_courseunit_list_1 %}
                                             <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                             <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                           {% endblock %}
                                           </ul>
                                         </li>
                                     <li>
                                       <b class="sem"><i>SEMESTER TWO</i></b>
                                         <ul>
                                        {% block dept_1_course_4_courseunit_list_2 %}
                                           <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                       {% endblock %}  
                                         </ul>
                                       </li>
                                       </ul>
                                 </li>
                               {% endblock %}
                               {% block dept_1_course_4_year_2 %}
                                 <li class="std-yr"><b><i>YEAR TWO</i></b>
                               <ul>
                                   <li>
                                       <b class="sem"><i>SEMESTER ONE</i></b>
                                         <ul>
                                         {% block dept_1_course_4_courseunit_list_3 %}
                                           <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}
                                         </ul>
                                   </li>
                                     <li>
                                       <b class="sem"><i>SEMESTER TWO</i></b>
                                         <ul>
                                         {% block dept_1_course_4_courseunit_list_4 %}
                                           <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                           <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %} 
                                         </ul>
                                     </li>
                               </ul>
                                 </li>  
                               {% endblock %}
                               {% block dept_1_course_4_year_3 %}
                                 <li class="std-yr"><b><i>YEAR THREE</i></b>
                               <ul>
                                 <li>
                                   <b class="sem"><i>SEMESTER ONE</i></b>
                                       <ul>
                                         {% block dept_1_course_4_courseunit_list_5 %}
                                         <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %}
                                       </ul>
                                 </li>
                                 <li>
                                   <b class="sem"><i>SEMESTER TWO</i></b>
                                       <ul>
                                         {% block dept_1_course_4_courseunit_list_6 %}
                                         <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %} 
                                       </ul>
                                </li>
                             </ul>
                                 </li>
                               {% endblock %}
                               {% block dept_1_course_4_year_4 %}
                                 <li class="std-yr"><b><i>YEAR FOUR</i></b>
                               <ul>
                                 <li>
                                   <b class="sem"><i>SEMESTER ONE</i></b>
                                       <ul>
                                         {% block dept_1_course_4_courseunit_list_7 %}
                                         <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                       {% endblock %}
                                       </ul>
                                 </li>
                                 <li>
                                     <b class="sem"><i>SEMESTER TWO</i></b>
                                       <ul>
                                         {% block dept_1_course_4_courseunit_list_8 %}
                                         <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                         <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                       {% endblock %}
                                       </ul>
                                </li>
                             </ul>
                                 </li>
                               {% endblock %}
                           </ul>
                       </li>
                   {% endblock %}
                   </ul>
         </div>
         {% endblock %}
        {% endblock %}
        {% block sch_1_dept_2 %}
        {% block dept_2 %}
      <strong><h3 class="dept_name">{% block dept2_name %} Department of Civil & Environmental Engineering  {% endblock %}</h3></strong>
     {% endblock %}
     {% block faculty_course_2 %}
      <div class="dept-courses">
                <ul class="courses">
                  {% block dept_2_course_list_1 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_2_course1-checkbox" autocomplete="off" >
                      <label for="dept_2_course1-checkbox" class="course_label" >
                        <h4 class ="course_name" data-toggle="collapse" data-target="#dept_2_course1" aria-expanded="false"><b>{% block dept_2_course1_name %} Bachelor of science in Civil Engineering {% endblock %}</b></h4>
                      </label>   
                        <ul class="collapse" id="dept_2_course1">
                              {% block dept_2_course_1_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                    <ul>
                                      <li>
                                    <strong><b class="sem"><i>SEMESTER ONE</i></b></strong>
                                    <ul>
                                      {% block dept_2_course_1_courseunit_list_1 %}
                                      <li class="course_units"><b><i><a  href="EMT1101.html">EMT1101-Engineering Math I</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CIV1101-Engineering Drawing	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CIV1102-Introduction to Civil Engineering	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="CMP1103-ict.html">EMT1104-Information and Communication Technology I	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="communication skills.html">TEC1101-Communication Skills for Technology	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CIV1103-Statics and Dynamics for Civil Engineers</a></i></b></li>
                                      {% endblock %}
                                    </ul>
                                  </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                    {% block dept_2_course_1_courseunit_list_2 %}
                                    <li class="course_units"><b><i><a  href="EMT1201.html">EMT1201-Engineering Math II</a></i></b></li>
                                    <li class="course_units"><b><i><a  href = "#">CIV1201-Strength of Materials	</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">CIV1202-Fluid Mechanics</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">CIV1203-Electrical Engineering	</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="CMP1103-ict.html">EMT1202-Information and Communication Technology II	</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">TEC1301-Workshop Practice</a></i></b></li>
                                  {% endblock %}
                                    </ul>
                                </li>
                                </ul>
                              </li>
                              {% endblock dept_2_course_1_year_1 %}

                              {% block dept_2_course_1_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                        <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                  <ul>
                                    {% block dept_2_course_1_courseunit_list_3 %}
                                    <li class="course_units"><b><i><a  href="#">EMT2101-Engineering Mathematics III	</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">CIV2102-Engineering Geology	</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">CIV2103-Engineering Surveying I	</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">CIV2104-Hydraulics		</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">TEC2101-Sociology For Technology</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">CIV2105-Thermodynamics for Civil engineers (elective)	</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">CIV2101-Theory of Structures I	</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                            </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                  {% block dept_2_course_1_courseunit_list_4 %}
                                  <li class="course_units"><b><i><a  href="#">EMT2201-Engineering Mathematics IV	</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">CIV2201-Soil Mechanics	</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">CIV2202-Theory of Structures II	</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">CIV2203-Civil Engineering Materials	</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">CIV2204-Engineering Surveying II	</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">CIV2205-Economics for Civil Engineering (elective)	</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                              </li>
                        </ul>
                              </li>
                              {% endblock dept_2_course_1_year_2 %}

                              {% block dept_2_course_1_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                  {% block dept_2_course_1_courseunit_list_5 %}
                                  <li class="course_units"><b><i><a href="#">CIV3101-Organisational Theory for Engineering	</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CIV3102-Design of Structures I (Concrete)	</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CIV3103-Highway Engineering	</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CIV3104-Hydrology I	</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CIV3105-Construction Technology	</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CIV3106-Environmental Chemistry (elective)	</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CIV3107-Principles of Quantity surveying (elective)	</a></i></b></li>
                                  {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_2_course_1_courseunit_list_6 %}
                                <li class="course_units"><b><i><a href="#">CIV3201-Foundation Engineering	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV3202-Group Design Project	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV3203-Design of Structures II (Steel)	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV3204-Water Resources Engineering I	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV3205-Public Health Engineering I	</a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_2_course_1_year_3 %}
                              {% block dept_2_course_1_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_2_course_1_courseunit_list_7 %}
                                <li class="course_units"><b><i><a href="#">CIV4100-Civil Engineering Project I	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV4101-Civil Engineering Management	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV4102-Civil Engineering Infrastructure Maintenance	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV4103-Traffic and Transportation Engineering	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV4104-Public Health Engineering II	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV4105-Design of Structures III (Timber and Masonry) (elective)	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV4106-Hydrology II (elective)	</a></i></b></li>
                                {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_2_course_1_courseunit_list_8 %}
                                <li class="course_units"><b><i><a href="#">CIV4200-Civil Engineering Project II	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV4201-Civil Engineering Law	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV4202-Water Resources Engineering II (elective)	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV4203-Civil Engineering Economy (elective)	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV4204-Civil Engineering Environmental Quality Management (elective)	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV4206-Introductory Dynamics of Structures (elective)	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CIV4209-Human Resources Management and Entrepreneurship (elective)	</a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_2_course_1_year_4 %}
                            </ul>
                     </li>
                  {% endblock %}
                  {% block dept_2_course_list_2 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_2_course2-checkbox" autocomplete="off" >
                      <label for="dept_2_course2-checkbox" class="course_label" >
                        <h4 class ="course_name" data-toggle="collapse" data-target="#dept_2_course2" aria-expanded="false"><b>{% block dept_2_course2_name %} Bachelor of science in Electrical Engineering {% endblock %}</b></h4>
                      </label>    
                        <ul class="collapse" id="dept_2_course2">
                              {% block dept_2_course_2_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                 <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_2_course_2_courseunit_list_1 %}
                                  <li class="course_units"><b><i><a href="EMT1101.html">EMT1101-Engineering Mathematics I</a></i></b></li>
                                  <li class="course_units"><b><i><a href="ELE1102-Physical Electronics.html">ELE1104-Physical Electronics</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE1105-Circuit Theory </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP1103-Information & Communication Technology</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE1112-Introduction To Electrical Engineering and Society </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">UNI1001-Communication Skills </a></i></b></li>
                                {% endblock %}
                                </ul>
                              </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_2_course_2_courseunit_list_2 %}
                                 <li class="course_units"><b><i><a href="#">EMT1201-Engineering Mathematics II</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE1201-Introduction To Digital Electronics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="ELE1204-Statics & Dynamics.html">ELE1204-Statics & Dynamics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE1205-Electrical Materials </a></i></b></li>
                                 <li class="course_units"><b><i><a href="socialogy-for-technology.html">TEC1202-Introduction To Sociology </a></i></b></li>
                                {% endblock %}
                              </ul>
                            </li>
                            </ul>
                              </li>
                              {% endblock dept_2_course_2_year_1 %}

                              {% block dept_2_course_2_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                    <ul>
                        <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                              <ul>
                              {% block dept_2_course_2_courseunit_list_3 %}
                                <li class="course_units"><b><i><a href="#">EMT2101-Engineering Mathematics III</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CMP2103-Object Oriented Programming</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2102-Electronic Circuits</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2111-Network Theory</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2112-Electromagnetics</a></i></b></li>
                             {% endblock %}
                              </ul>
                        </li>
                          <li>
                            <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_2_course_2_courseunit_list_4 %}
                               <li class="course_units"><b><i><a href="#">EMT2201-Engineering Mathematics IV</a></i></b></li>


                               <!--<li><b><i><a style="color:blue;" href = "programming.html">ELE2201-Power Systems Theory</a></i></b></li>
                               <li><b><i><a style="color:blue;" href="#">ELE2203-Network Theory I</a></i></b></li>
                               <li><b><i><a style="color:blue;" href="#">ELE2204-Economics For Elecrical Engineers</a></i></b></li>-->
                               <li class="course_units"><b><i><a href="#">ELE2211-Electromagnetic Fields</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE2212-Electrical Energy Systems</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE2213-Instrumentation</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">TEC2202-Technology,Ethics & Human Rights</a></i></b></li>
                                {% endblock %}
                              </ul>
                          </li>
                    </ul>
                              </li>
                              {% endblock dept_2_course_2_year_2 %}

                              {% block dept_2_course_2_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_2_course_2_courseunit_list_5 %}
                              <li class="course_units"><b><i><a href="#">COE3100-Entrepreneurship</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3102-Applied Analogue Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3103-Applied Digital Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3112-Radio Wave Propagation & Antennas</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3113-Power Systems Theory</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3114-Electrical Machines & Drives I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3111-Communication Theory</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">LAW1104-Law of Contracts </a></i></b></li>
                              {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_2_course_2_courseunit_list_6 %}
                              <li class="course_units"><b><i><a href="#">ELE3211-Industrial Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3202-Control Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3203-Power Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3204-Communication Engineering I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3205-Electrical Machines & Drives II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3215-Power Systems Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">EMT3201-Engineering Mathematics VI</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3214-Computer Communication Networks</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3216-Energy Conversion And Generation</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3212-Digital Communications Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3217-Systems Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">Mobile Communication Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">COE1102-Fundamental Acccounts Principles</a></i></b></li>
                            {% endblock %}

                            </ul>
                     </li>
                  </ul>
                              </li>
                              {% endblock dept_2_course_2_year_3 %}

                              {% block dept_2_course_2_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_2_course_2_courseunit_list_7 %}
                              <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                              <li class="course_units"><b><i><a href="#"></a></i></b></li>
                            {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_2_course_2_courseunit_list_8 %}
                            <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                            <li class="course_units"><b><i><a href="#"></a></i></b></li>
                          {% endblock %}
                          </ul>
            </li>
            </ul>
                              </li>
                              {% endblock dept_2_course_2_year_4 %}
                              
                              {% block dept_2_course_2_year_5 %}
                              <li class="std-yr"><b><i>YEAR FIVE</i></b>
                                <ul>
                                  <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                          {% block dept_2_course_2_courseunit_list_9 %}
                                          <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                  </li>
                                  <li>
                                      <b class="sem"><i>SEMESTER TWO</i></b>
                                        <ul>
                                          {% block dept_2_course_2_courseunit_list_10 %}
                                        <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                      {% endblock %}
                                      </ul>
                        </li>
                        </ul>
                                          </li>
                              
                              {% endblock %}
                           </ul>
                     </li> 
                  {% endblock %}       
                  
                  {% block dept_2_course_list_3 %}
                      <li>
                        <input type="checkbox" class="course-checkbox" id="dept_2_course3-checkbox" autocomplete="off" >
                      <label for="dept_2_course3-checkbox" class="course_label" >
                        <h4 class ="course_name" data-toggle="collapse" data-target="#dept_2_course3" aria-expanded="false"><b>{% block dept_2_course3_name %} Bachelor of Science In Telecommunication Engineering {% endblock %}</b></h4>
                      </label>   
                        <ul class="collapse" id="dept_2_course3">
                            {% block dept_2_course_3_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_2_course_3_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}  
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_2_course_3_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                              {% endblock %}
                              {% block dept_2_course_3_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_2_course_3_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_2_course_3_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                  </li>
                            </ul>
                              </li>
                              {% endblock %}
                              {% block dept_2_course_3_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_2_course_3_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_2_course_3_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                              {% block dept_2_course_3_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_2_course_3_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_2_course_3_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock  %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                           </ul>
                    </li>
                  {% endblock %}
                  {% block dept_2_course_list_4 %}
                    <li>
                      <input type="checkbox" class="course-checkbox" id="dept_2_course4-checkbox" autocomplete="off" >
                      <label for="dept_2_course4-checkbox" class="course_label" >
                          <h4 class ="course_name" data-toggle="collapse" data-target="#dept_2_course4" aria-expanded="false"><b>{% block dept_2_course4_name %} Bachelor Of Science In Biomedical Engineering{% endblock %}</b></h4>
                      </label>
                          <ul class="collapse" id="dept_2_course4">
                            {% block dept_2_course_4_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_2_course_4_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                     {% block dept_2_course_4_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}  
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                            {% endblock %}
                            {% block dept_2_course_4_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_2_course_4_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_2_course_4_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %} 
                                      </ul>
                                  </li>
                            </ul>
                              </li>  
                            {% endblock %}
                            {% block dept_2_course_4_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_2_course_4_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                  {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_2_course_4_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                   {% endblock %} 
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                            {% block dept_2_course_4_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_2_course_4_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_2_course_4_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                        </ul>
                    </li>
                {% endblock %}
                </ul>
      </div>
      {% endblock %}
      {% endblock %}

      {% block sch_1_dept_3 %}
      {% block dept_3 %}
      <strong><h3 class="dept_name">{% block dept3_name %} Department of  Mechanical Engineering  {% endblock %}</h3></strong>
      {% endblock %}
      {% block faculty_course_3 %}
      <div class="dept-courses">
                <ul class="courses">
                  {% block dept_3_course_list_1 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_3_course1-checkbox" autocomplete="off" >
                      <label for="dept_3_course1-checkbox" class="course_label" >
                        <h4 class ="course_name" data-toggle="collapse" data-target="#dept_3_course1" aria-expanded="false"><b>{% block dept_3_course1_name %} Bachelor of science in Mechanical Engineering {% endblock %}</b></h4>
                      </label>    
                        <ul class="collapse" id="dept_3_course1">
                              {% block dept_3_course_1_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                    <ul>
                                      <li>
                                    <strong><b class="sem"><i>SEMESTER ONE</i></b></strong>
                                    <ul>
                                      {% block dept_3_course_1_courseunit_list_1 %}
                                      <li class="course_units"><b><i><a  href="EMT1101.html">EMT1101-Engineering Math I</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">MEC1101-Engineering Drawing	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">MEC1102-Engineering Mechanics	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="CMP1103-ict.html">MEC1103-Electrical Engineering for Mechanical Engineers	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="communication skills.html">TEC1101-Communication Skills for Technology	</a></i></b></li>
                                      {% endblock %}
                                    </ul>
                                  </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                    {% block dept_3_course_1_courseunit_list_2 %}
                                    <li class="course_units"><b><i><a  href="EMT1201.html">EMT1201-Engineering Math II</a></i></b></li>
                                    <li class="course_units"><b><i><a  href = "#">EMT1204-Information Communication Technology	</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">MEC1202-Engineering Mechanics II	</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">MEC1203-Thermodynamics	</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">MEC1204-Mechanics of Materials	</a></i></b></li>
                                  {% endblock %}
                                    </ul>
                                </li>
                                </ul>
                              </li>
                              {% endblock dept_3_course_1_year_1 %}

                              {% block dept_3_course_1_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                        <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                  <ul>
                                    {% block dept_3_course_1_courseunit_list_3 %}
                                    <li class="course_units"><b><i><a  href="#">EMT2101-Engineering Mathematics III	</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">MEC2101-Fluid Mechanics for Mechanical Engineers	</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">MEC2102-Mechanics of Materials II	</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">MEC2103-Computer Aided Design for Mechanical Engineers	</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">TEC2101-Sociology for technologists	</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                            </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                  {% block dept_3_course_1_courseunit_list_4 %}
                                  <li class="course_units"><b><i><a  href="#">MEC2201-Electrical Engineering II	</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">MEC2202-Theory of Machine Elements	</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">MEC2203-Computer Programming	</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">MEC2204-Material Science and Engineering I	</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">MEC2205-Fluid Mechanics II	</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                              </li>
                        </ul>
                              </li>
                              {% endblock dept_3_course_1_year_2 %}

                              {% block dept_3_course_1_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                  {% block dept_3_course_1_courseunit_list_5 %}
                                  <li class="course_units"><b><i><a href="#">MEC3101-Material Science and Engineering	</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">MEC3102-Engineering Management	</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">MEC3103-Production Engineering I	</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">MEC3104-Design of Machine Elements	</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">MEC3105-Dynamic Systems Engineering	</a></i></b></li>
                                  {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_3_course_1_courseunit_list_6 %}
                                <li class="course_units"><b><i><a href="#">MEC3201-Maintenance Engineering	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC3202-Production Engineering II	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC3203-Product Design and Development	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC3204-Heat Transfer	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC3205-Control Systems Engineering	</a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_3_course_1_year_3 %}
                              {% block dept_3_course_1_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_3_course_1_courseunit_list_7 %}
                                <li class="course_units"><b><i><a href="#">MEC4101-Business Management for Mechanical Engineers	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC4102-Applied Thermodynamics	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC4103-Production Planning and Control	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC4104-Mechanical Engineering Project I	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC4105-Renewable Energy Technologies (elective)	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC4106-Materials Handling (elective)	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC4107-Welding Technology (elective)	</a></i></b></li>
                                {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_3_course_1_courseunit_list_8 %}
                                <li class="course_units"><b><i><a href="#">MEC4201-Entrepreneurship for Mechanical Engineers	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC4202-Environmental Engineering	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC4204-Mechanical Engineering Project II	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC4205-Air Conditioning and Refrigeration (elective)	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC4206-Fluid Power systems (elective)	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC4207-Operations research and project management for Mechanical Engineers (elective)	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC4208-Computer Aided Engineering for mechanical Engineers	</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">MEC4209-Automotive Engineering (elective)	</a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_3_course_1_year_4 %}
                            </ul>
                     </li>
                  {% endblock %}
                  {% block dept_3_course_list_2 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_3_course2-checkbox" autocomplete="off" >
                      <label for="dept_3_course2-checkbox" class="course_label" >
                        <h4 class ="course_name" data-toggle="collapse" data-target="#dept_3_course2" aria-expanded="false"><b>{% block dept_3_course2_name %} Bachelor of science in Elecrical Engineering {% endblock %}</b></h4>
                      </label>   
                        <ul class="collapse" id="dept_3_course2">
                              {% block dept_3_course_2_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                 <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_3_course_2_courseunit_list_1 %}
                                  <li class="course_units"><b><i><a href="EMT1101.html">EMT1101-Engineering Mathematics I</a></i></b></li>
                                  <li class="course_units"><b><i><a href="ELE1102-Physical Electronics.html">ELE1104-Physical Electronics</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE1105-Circuit Theory </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP1103-Information & Communication Technology</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE1112-Introduction To Electrical Engineering and Society </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">UNI1001-Communication Skills </a></i></b></li>
                                {% endblock %}
                                </ul>
                              </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_3_course_2_courseunit_list_2 %}
                                 <li class="course_units"><b><i><a href="#">EMT1201-Engineering Mathematics II</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE1201-Introduction To Digital Electronics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="ELE1204-Statics & Dynamics.html">ELE1204-Statics & Dynamics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE1205-Electrical Materials </a></i></b></li>
                                 <li class="course_units"><b><i><a href="socialogy-for-technology.html">TEC1202-Introduction To Sociology </a></i></b></li>
                                {% endblock %}
                              </ul>
                            </li>
                            </ul>
                              </li>
                              {% endblock dept_3_course_2_year_1 %}

                              {% block dept_3_course_2_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                    <ul>
                        <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                              <ul>
                              {% block dept_3_course_2_courseunit_list_3 %}
                                <li class="course_units"><b><i><a href="#">EMT2101-Engineering Mathematics III</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CMP2103-Object Oriented Programming</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2102-Electronic Circuits</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2111-Network Theory</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2112-Electromagnetics</a></i></b></li>
                             {% endblock %}
                              </ul>
                        </li>
                          <li>
                            <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_3_course_2_courseunit_list_4 %}
                               <li class="course_units"><b><i><a href="#">EMT2201-Engineering Mathematics IV</a></i></b></li>


                               <!--<li><b><i><a style="color:blue;" href = "programming.html">ELE2201-Power Systems Theory</a></i></b></li>
                               <li><b><i><a style="color:blue;" href="#">ELE2203-Network Theory I</a></i></b></li>
                               <li><b><i><a style="color:blue;" href="#">ELE2204-Economics For Elecrical Engineers</a></i></b></li>-->
                               <li class="course_units"><b><i><a href="#">ELE2211-Electromagnetic Fields</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE2212-Electrical Energy Systems</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE2213-Instrumentation</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">TEC2202-Technology,Ethics & Human Rights</a></i></b></li>
                                {% endblock %}
                              </ul>
                          </li>
                    </ul>
                              </li>
                              {% endblock dept_3_course_2_year_2 %}

                              {% block dept_3_course_2_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_3_course_2_courseunit_list_5 %}
                              <li class="course_units"><b><i><a href="#">COE3100-Entrepreneurship</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3102-Applied Analogue Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3103-Applied Digital Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3112-Radio Wave Propagation & Antennas</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3113-Power Systems Theory</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3114-Electrical Machines & Drives I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3111-Communication Theory</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">LAW1104-Law of Contracts </a></i></b></li>
                              {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_3_course_2_courseunit_list_6 %}
                              <li class="course_units"><b><i><a href="#">ELE3211-Industrial Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3202-Control Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3203-Power Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3204-Communication Engineering I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3205-Electrical Machines & Drives II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3215-Power Systems Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">EMT3201-Engineering Mathematics VI</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3214-Computer Communication Networks</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3216-Energy Conversion And Generation</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3212-Digital Communications Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3217-Systems Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">Mobile Communication Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">COE1102-Fundamental Acccounts Principles</a></i></b></li>
                            {% endblock %}

                            </ul>
                     </li>
                  </ul>
                              </li>
                              {% endblock dept_3_course_2_year_3 %}

                              {% block dept_3_course_2_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_3_course_2_courseunit_list_7 %}
                              <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                              <li class="course_units"><b><i><a href="#"></a></i></b></li>
                            {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_3_course_2_courseunit_list_8 %}
                            <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                            <li class="course_units"><b><i><a href="#"></a></i></b></li>
                          {% endblock %}
                          </ul>
            </li>
            </ul>
                              </li>
                              {% endblock dept_3_course_2_year_4 %}
                              
                              {% block dept_3_course_2_year_5 %}
                              <li class="std-yr"><b><i>YEAR FIVE</i></b>
                                <ul>
                                  <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                          {% block dept_3_course_2_courseunit_list_9 %}
                                          <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                  </li>
                                  <li>
                                      <b class="sem"><i>SEMESTER TWO</i></b>
                                        <ul>
                                          {% block dept_3_course_2_courseunit_list_10 %}
                                        <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                      {% endblock %}
                                      </ul>
                        </li>
                        </ul>
                                          </li>
                              
                              {% endblock %}
                           </ul>
                     </li> 
                  {% endblock %}       
                  
                  {% block dept_3_course_list_3 %}
                      <li>
                        <input type="checkbox" class="course-checkbox" id="dept_3_course3-checkbox" autocomplete="off" >
                        <label for="dept_3_course3-checkbox" class="course_label" >
                        <h4 class ="course_name" data-toggle="collapse" data-target="#dept_3_course3" aria-expanded="false"><b>{% block dept_3_course3_name %} Bachelor of Science In Telecommunication Engineering {% endblock %}</b></h4>
                        </label>   
                        <ul class="collapse" id="dept_3_course3">
                            {% block dept_3_course_3_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_3_course_3_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}  
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_3_course_3_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                              {% endblock %}
                              {% block dept_3_course_3_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_3_course_3_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_3_course_3_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                  </li>
                            </ul>
                              </li>
                              {% endblock %}
                              {% block dept_3_course_3_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_3_course_3_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_3_course_3_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                              {% block dept_3_course_3_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_3_course_3_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_3_course_3_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock  %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                           </ul>
                    </li>
                  {% endblock %}
                  {% block dept_3_course_list_4 %}
                    <li>
                      <input type="checkbox" class="course-checkbox" id="dept_3_course4-checkbox" autocomplete="off" >
                      <label for="dept_3_course4-checkbox" class="course_label" >
                          <h4 class ="course_name" data-toggle="collapse" data-target="#dept_3_course4" aria-expanded="false"><b>{% block dept_3_course4_name %} Bachelor Of Science In Biomedical Engineering{% endblock %}</b></h4>
                      </label>  
                        <ul class="collapse" id="dept_3_course4">
                            {% block dept_3_course_4_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_3_course_4_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                     {% block dept_3_course_4_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}  
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                            {% endblock %}
                            {% block dept_3_course_4_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_3_course_4_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_3_course_4_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %} 
                                      </ul>
                                  </li>
                            </ul>
                              </li>  
                            {% endblock %}
                            {% block dept_3_course_4_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_3_course_4_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                  {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_3_course_4_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                   {% endblock %} 
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                            {% block dept_3_course_4_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_3_course_4_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_3_course_4_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                        </ul>
                    </li>
                {% endblock %}
                </ul>
      </div>
      {% endblock %}
      {% endblock %}
      
{% block sch_1_dept_10 %}
{% block dept_4 %}
<strong><h3 class="dept_name">{% block dept10_name %} Department of Electrical & Computer Engineering  {% endblock %}</h3></strong>
{% endblock %}
  {% block faculty_course_4 %}
<div class="dept-courses">
          <ul class="courses">
            {% block dept_10_course_list_1 %}
               <li>
                 <input type="checkbox" class="course-checkbox" id="dept_10_course1-checkbox" autocomplete="off" >
                 <label for="dept_10_course1-checkbox" class="course_label" >
                   <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_10_course1" aria-expanded="false"><b>{% block dept_10_course1_name %} Bachelor of science in Computer Engineering {% endblock %}</b>
                 </h4>
               </label>
                      <ul class="collapse"  id="dept_10_course1">
                        {% block dept_10_course_1_year_1 %}
                        <li class="std-yr"><b><i>YEAR ONE</i></b>
                              <ul>
                                <li>
                              <strong><b class="sem"><i>SEMESTER ONE</i></b></strong>
                              <ul>
                                {% block dept_10_course_1_courseunit_list_1 %}
                                <li class="course_units"><b><i><a  href="EMT1101.html">EMT1101-Engineering Math I</a></i></b></li>
                                <li class="course_units"><b><i><a href="CMP1101-electronics1.html"> CMP1101-Electronics I</a></i></b></li>
                                <li class="course_units"><b><i><a  href="ethics.html">CMP1102-Computer Engineering Ethics</a></i></b></li>
                                <li class="course_units"><b><i><a  href="CMP1103-ict.html">CMP1103-Information & Communication Technology</a></i></b></li>
                                <li class="course_units"><b><i><a href="communication skills.html">UNI1001-Communication Skills </a></i></b></li>
                                {% endblock %}
                              </ul>
                            </li>
                        <li>
                            <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_10_course_1_courseunit_list_2 %}
                               <li class="course_units"><b><i><a  href="EMT1201.html">EMT1201-Engineering Math II</a></i></b></li>
                               <li class="course_units"><b><i><a  href = "computer programming fundamentals-muk.html">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                               <li class="course_units"><b><i><a  href="CMP1202-electronics2.html">CMP1202-Electronics II</a></i></b></li>
                               <li class="course_units"><b><i><a  href="CMP1203-Computer-architecure&organisation.html">CMP1203-Computer Architecture & Organization</a></i></b></li>
                               <li class="course_units"><b><i><a  href="ELE1202-electricity&magnetism.html">ELE1202-Electricity & Magnetism </a></i></b></li>
                            {% endblock %}
                              </ul>
                          </li>
                          </ul>
                        </li>
                        {% endblock dept_10_course_1_year_1 %}

                        {% block dept_10_course_1_year_2 %}
                        <li class="std-yr"><b><i>YEAR TWO</i></b>
                  <ul>
                      <li>
                          <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_10_course_1_courseunit_list_3 %}
                              <li class="course_units"><b><i><a  href="#">EMT2101-Engineering Math III</a></i></b></li>
                              <li class="course_units"><b><i><a  href="software-engineering.html">CMP2101-Software Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a  href="CMP2102-electric _circuits_and_signals.html">CMP2102-Electric Circuits and Signals</a></i></b></li>
                              <li class="course_units"><b><i><a  href="CMP2103-OOP.html">CMP2103-Object Oriented Programming</a></i></b></li>
                              <li class="course_units"><b><i><a  href="socialogy-for-technology.html">TEC2101-Sociology For Technology</a></i></b></li>
                            {% endblock %}
                            </ul>
                      </li>
                        <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                            {% block dept_10_course_1_courseunit_list_4 %}
                             <li class="course_units"><b><i><a  href="#">CMP2201-Discrete Mathematics and Random Processes</a></i></b></li>
                             <li class="course_units"><b><i><a  href="#">CMP2202-Analysis and Design Of Algorithms</a></i></b></li>
                             <li class="course_units"><b><i><a  href="#">CMP2203-Digital Logic</a></i></b></li>
                             <li class="course_units"><b><i><a  href="#">CMP2204-Operating Systems Technologies</a></i></b></li>
                             <li class="course_units"><b><i><a  href="#">CMP2205-Computer Networks</a></i></b></li>
                            {% endblock %}
                            </ul>
                        </li>
                  </ul>
                        </li>
                        {% endblock dept_10_course_1_year_2 %}

                        {% block dept_10_course_1_year_3 %}
                        <li class="std-yr"><b><i>YEAR THREE</i></b>
                  <ul>
                    <li>
                      <b class="sem"><i>SEMESTER ONE</i></b>
                          <ul>
                            {% block dept_10_course_1_courseunit_list_5 %}
                            <li class="course_units"><b><i><a href="#">CMP3101-Database Systems</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">CMP3104-Computer Based Medical Systems</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE3101-Electro Magnetic Fields</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE3102-Applied Analouge Electronics</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">EMT3105-Engineering Mathematics V</a></i></b></li>
                            {% endblock %}
                          </ul>
                    </li>
                    <li>
                        <b class="sem"><i>SEMESTER TWO</i></b>
                          <ul>
                          {% block dept_10_course_1_courseunit_list_6 %}
                            <li class="course_units"><b><i><a href="#">CMP3201-Embedded Systems</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">CMP3202-Human Computer Interaction</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">CMP3203-Computer Systems Maintenance</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">CMP3204-Distributed Information Systems</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">CMP3205-Intelligent Systems </a></i></b></li>
                            <li class="course_units"><b><i><a href="#">CMP3206-Saftey Critical System </a></i></b></li>
                            <li class="course_units"><b><i><a href="#">CMP3207-Sustainable Energy Systems </a></i></b></li>
                          {% endblock %}
                          </ul>
                   </li>
                </ul>
                        </li>
                        {% endblock dept_10_course_1_year_3 %}
                        {% block dept_10_course_1_year_4 %}
                        <li class="std-yr"><b><i>YEAR FOUR</i></b>
                  <ul>
                    <li>
                      <b class="sem"><i>SEMESTER ONE</i></b>
                          <ul>
                          {% block dept_10_course_1_courseunit_list_7 %}
                            <li class="course_units"><b><i><a href="#">CMP4101-Digital Signal Processing</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">CMP4102-Instrumention and Control Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems and Network Security</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and Video Processing</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEC4101-Research Methods </a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEC4102-Principles of Management </a></i></b></li>
                          {% endblock %}
                          </ul>
                    </li>
                    <li>
                        <b class="sem"><i>SEMESTER TWO</i></b>
                          <ul>
                          {% block dept_10_course_1_courseunit_list_8 %}
                            <li class="course_units"><b><i><a href="#">CMP4201-Research Project</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">CMP4204-Wireless Technologies</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">CMP4205-Audio and Speech Signal Processing</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4201-Project </a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEC4201-Entrepreneurship </a></i></b></li>
                          {% endblock %}
                          </ul>
                   </li>
                </ul>
                        </li>
                        {% endblock dept_10_course_1_year_4 %}
                      </ul>
               </li>
            {% endblock %}
            {% block dept_10_course_list_2 %}
               <li>
                 <input type="checkbox" class="course-checkbox" id="dept_10_course2-checkbox" autocomplete="off" >
                 <label for="dept_10_course2-checkbox" class="course_label" >
                  <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_10_course2" aria-expanded="false"><b>{% block dept_10_course2_name %} Bachelor of science in Elecrical Engineering {% endblock %}</b>
                 </h4> 
               </label>   
                  <ul class="collapse"  id="dept_10_course2">
                        {% block dept_10_course_2_year_1 %}
                        <li class="std-yr"><b><i>YEAR ONE</i></b>
                           <ul>
                      <li>
                          <b class="sem"><i>SEMESTER ONE</i></b>
                          <ul>
                          {% block dept_10_course_2_courseunit_list_1 %}
                            <li class="course_units"><b><i><a href="EMT1101.html">EMT1101-Engineering Mathematics I</a></i></b></li>
                            <li class="course_units"><b><i><a href="ELE1102-Physical Electronics.html">ELE1104-Physical Electronics</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE1105-Circuit Theory </a></i></b></li>
                            <li class="course_units"><b><i><a href="#">CMP1103-Information & Communication Technology</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE1112-Introduction To Electrical Engineering and Society </a></i></b></li>
                            <li class="course_units"><b><i><a href="#">UNI1001-Communication Skills </a></i></b></li>
                          {% endblock %}
                          </ul>
                        </li>
                    <li>
                        <b class="sem"><i>SEMESTER TWO</i></b>
                        <ul>
                          {% block dept_10_course_2_courseunit_list_2 %}
                           <li class="course_units"><b><i><a href="#">EMT1201-Engineering Mathematics II</a></i></b></li>
                           <li class="course_units"><b><i><a href="#">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                           <li class="course_units"><b><i><a href="#">ELE1201-Introduction To Digital Electronics</a></i></b></li>
                           <li class="course_units"><b><i><a href="ELE1204-Statics & Dynamics.html">ELE1204-Statics & Dynamics</a></i></b></li>
                           <li class="course_units"><b><i><a href="#">ELE1205-Electrical Materials </a></i></b></li>
                           <li class="course_units"><b><i><a href="socialogy-for-technology.html">TEC1202-Introduction To Sociology </a></i></b></li>
                          {% endblock %}
                        </ul>
                      </li>
                      </ul>
                        </li>
                        {% endblock dept_10_course_2_year_1 %}

                        {% block dept_10_course_2_year_2 %}
                        <li class="std-yr"><b><i>YEAR TWO</i></b>
              <ul>
                  <li>
                      <b class="sem"><i>SEMESTER ONE</i></b>
                        <ul>
                        {% block dept_10_course_2_courseunit_list_3 %}
                          <li class="course_units"><b><i><a href="#">EMT2101-Engineering Mathematics III</a></i></b></li>
                          <li class="course_units"><b><i><a href="#">CMP2103-Object Oriented Programming</a></i></b></li>
                          <li class="course_units"><b><i><a href="#">ELE2102-Electronic Circuits</a></i></b></li>
                          <li class="course_units"><b><i><a href="#">ELE2111-Network Theory</a></i></b></li>
                          <li class="course_units"><b><i><a href="#">ELE2112-Electromagnetics</a></i></b></li>
                       {% endblock %}
                        </ul>
                  </li>
                    <li>
                      <b class="sem"><i>SEMESTER TWO</i></b>
                        <ul>
                          {% block dept_10_course_2_courseunit_list_4 %}
                         <li class="course_units"><b><i><a href="#">EMT2201-Engineering Mathematics IV</a></i></b></li>


                         <!--<li><b><i><a style="color:blue;" href = "programming.html">ELE2201-Power Systems Theory</a></i></b></li>
                         <li><b><i><a style="color:blue;" href="#">ELE2203-Network Theory I</a></i></b></li>
                         <li><b><i><a style="color:blue;" href="#">ELE2204-Economics For Elecrical Engineers</a></i></b></li>-->
                         <li class="course_units"><b><i><a href="#">ELE2211-Electromagnetic Fields</a></i></b></li>
                         <li class="course_units"><b><i><a href="#">ELE2212-Electrical Energy Systems</a></i></b></li>
                         <li class="course_units"><b><i><a href="#">ELE2213-Instrumentation</a></i></b></li>
                         <li class="course_units"><b><i><a href="#">TEC2202-Technology,Ethics & Human Rights</a></i></b></li>
                          {% endblock %}
                        </ul>
                    </li>
              </ul>
                        </li>
                        {% endblock dept_10_course_2_year_2 %}

                        {% block dept_10_course_2_year_3 %}
                        <li class="std-yr"><b><i>YEAR THREE</i></b>
              <ul>
                <li>
                  <b class="sem"><i>SEMESTER ONE</i></b>
                      <ul>
                        {% block dept_10_course_2_courseunit_list_5 %}
                        <li class="course_units"><b><i><a href="#">COE3100-Entrepreneurship</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE3102-Applied Analogue Electronics</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE3103-Applied Digital Electronics</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE3112-Radio Wave Propagation & Antennas</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE3113-Power Systems Theory</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE3114-Electrical Machines & Drives I</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">TEL3111-Communication Theory</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">LAW1104-Law of Contracts </a></i></b></li>
                        {% endblock %}
                      </ul>
                </li>
                <li>
                    <b class="sem"><i>SEMESTER TWO</i></b>
                      <ul>
                        {% block dept_10_course_2_courseunit_list_6 %}
                        <li class="course_units"><b><i><a href="#">ELE3211-Industrial Electronics</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE3202-Control Engineering</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE3203-Power Electronics</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE3204-Communication Engineering I</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE3205-Electrical Machines & Drives II</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE3215-Power Systems Engineering</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">EMT3201-Engineering Mathematics VI</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">TEL3214-Computer Communication Networks</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE3216-Energy Conversion And Generation</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">TEL3212-Digital Communications Systems</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">TEL3217-Systems Engineering</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">Mobile Communication Systems</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">COE1102-Fundamental Acccounts Principles</a></i></b></li>
                      {% endblock %}

                      </ul>
               </li>
            </ul>
                        </li>
                        {% endblock dept_10_course_2_year_3 %}

                        {% block dept_10_course_2_year_4 %}
                        <li class="std-yr"><b><i>YEAR FOUR</i></b>
              <ul>
                <li>
                  <b class="sem"><i>SEMESTER ONE</i></b>
                      <ul>
                        {% block dept_10_course_2_courseunit_list_7 %}
                        <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                        <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                        <li class="course_units"><b><i><a href="#"></a></i></b></li>
                      {% endblock %}
                      </ul>
                </li>
                <li>
                    <b class="sem"><i>SEMESTER TWO</i></b>
                      <ul>
                        {% block dept_10_course_2_courseunit_list_8 %}
                      <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                      <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                      <li class="course_units"><b><i><a href="#"></a></i></b></li>
                    {% endblock %}
                    </ul>
      </li>
      </ul>
                        </li>
                        {% endblock dept_10_course_2_year_4 %}
                    
                     </ul>
               </li> 
            {% endblock %}       
          </ul>
</div>
{% endblock %}
{% endblock %}

{% endblock %}
{% block col_sch_2 %}
{% block sch2_title_box %}<div class="sch_title_box"><h2 class="sch_title"><b>{% block sch2_title %} SCHOOL OF BUILT ENVIRONMENT {% endblock %}</b> </h2></div>{% endblock %}
{% block sch_2_dept_1 %}
{% block dept_5 %}
      <strong><h3 class="dept_name">{% block dept4_name %} Department of Construction Economics & Management  {% endblock %}</h3></strong>
      {% endblock %}
      {% block faculty_course_5 %}
      <div class="dept-courses">
                <ul class="courses">
                  {% block dept_4_course_list_1 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_4_course1-checkbox" autocomplete="off" >
                      <label for="dept_4_course1-checkbox" class="course_label" >
                        <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_4_course1" aria-expanded="false"><b>{% block dept_4_course1_name %} Bachelor of Science In Quantity Surveying {% endblock %}</b></h4>
                      </label>    
                        <ul class="collapse"  id="dept_4_course1">
                              {% block dept_4_course_1_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                    <ul>
                                      <li>
                                    <strong><b class="sem"><i>SEMESTER ONE</i></b></strong>
                                    <ul>
                                      {% block dept_4_course_1_courseunit_list_1 %}
                                      <li class="course_units"><b><i><a  href="#">CSC1100-Computer Literacy</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">UNI1001-Communication Skills</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">EMT1108-Engineering Mathematics</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">LAW1120-Basic Law and Governance Structures</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">QUS1101-Introduction to Quantity Surveying</a></i></b></li>
                                      {% endblock %}
                                    </ul>
                                  </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                    {% block dept_4_course_1_courseunit_list_2 %}
                                    <li class="course_units"><b><i><a  href="#">ARC1206-Elements of Architectural Design Fundamentals</a></i></b></li>
                                    <li class="course_units"><b><i><a  href = "#">CIV1205-Elements of Structural Analysis</a></i></b></li>
                                    <li class="course_units"><b><i><a  href = "#">LAW1220-Law of Contract for Surveyors</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">QUS1205-Construction Technology I</a></i></b></li>
                                    <li class="course_units"><b><i><a  href = "#">QUS1206-Construction Drawing</a></i></b></li>
                                    <li class="course_units"><b><i><a  href = "#">QUS1207-Quantity Surveying I</a></i></b></li>
                                    {% endblock %}
                                  </ul>
                                </li>
                                </ul>
                              </li>
                              {% endblock dept_4_course_1_year_1 %}

                              {% block dept_4_course_1_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                        <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                  <ul>
                                    {% block dept_4_course_1_courseunit_list_3 %}
                                    <li class="course_units"><b><i><a href="#">CMG2102-Construction Materials</a></i></b></li>
                                    <li class="course_units"><b><i><a href="#">ECO2104-Principles of Management</a></i></b></li>
                                    <li class="course_units"><b><i><a href="#">LAW2106-Law of Torts for Construction	</a></i></b></li>
                                    <li class="course_units"><b><i><a href="#">QUS2102-Building Finishes & Fixtures</a></i></b></li>
                                    <li class="course_units"><b><i><a href="#">QUS2104-Construction Technology II	</a></i></b></li>
                                    <li class="course_units"><b><i><a href="#">SOC2103-Sociology for Technology</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                            </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                  {% block dept_4_course_1_courseunit_list_4 %}
                                  <li class="course_units"><b><i><a  href="#">LAW2202-Commercial Law for Construction</a></i></b></li>
                                  <li class="course_units"><b><i><a  href ="#">QUS2201-Quantity Surveying II</a></i></b></li>
                                  <li class="course_units"><b><i><a  href ="#">QUS2202-Building Services</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">QUS2203-Economics of Property and Construction</a></i></b></li>
                                  <li class="course_units"><b><i><a  href ="#">QUS2205-Cost and Value Engineering</a></i></b></li>
                                  <li class="course_units"><b><i><a  href ="#">SUV2206-Land Surveying for Construction	</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                              </li>
                        </ul>
                              </li>
                              {% endblock dept_4_course_1_year_2 %}

                              {% block dept_4_course_1_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                  {% block dept_4_course_1_courseunit_list_5 %}
                                  <li class="course_units"><b><i><a  href="#">CMG3103-Maintenance Management</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">COE3103-Principles of Accounting for Surveyors</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">LAW3109-Elements of Property Law	</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">LAW3110-Elements of Planning Law</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">QUS3101-Construction Technology III	</a></i></b></li>
                                  <li class="course_units"><b><i><a  href="#">QUS3102-Housing Development and Management	</a></i></b></li>
                                  {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_4_course_1_courseunit_list_6 %}
                                <li class="course_units"><b><i><a  href="#">COE3202-Entrepreneurship	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">LEC3204-Research Methods and Statistics		</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS3201-Quantity Surveying III	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS3202-Construction Production Management		</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS3203-Construction Contract Administration	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS3301-Industrial Training	</a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_4_course_1_year_3 %}
                              {% block dept_4_course_1_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_4_course_1_courseunit_list_7 %}
                                <li class="course_units"><b><i><a  href="#">QUS4101-Construction Technology IV	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS4102-Operations Research Techniques		</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS4103-Building Surveying	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS4104-Professional Practice, Procedure and Ethics	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS4105-Construction Project Management	</a></i></b></li>
                                {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_4_course_1_courseunit_list_8 %}
                                <li class="course_units"><b><i><a  href="#">QUS4201-Final Year Research Project 1& II	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS4202-Quantity Surveying IV	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS4203-Facilities Management		</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS4204-Analysis of Prices and Estimating		</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS4205-Arbitration & Alternative Dispute Resolution in Construction</a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_4_course_1_year_4 %}
                            </ul>
                     </li>
                  {% endblock %}
                  {% block dept_4_course_list_2 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_4_course2-checkbox" autocomplete="off" >
                      <label for="dept_4_course2-checkbox" class="course_label" >
                        <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_4_course2" aria-expanded="false"><b>{% block dept_4_course2_name %} Bachelor of Science In Land Economics{% endblock %}</b></h4>
                        </label>    
                        <ul class="collapse"  id="dept_4_course2">
                              {% block dept_4_course_2_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                 <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_4_course_2_courseunit_list_1 %}
                                <li class="course_units"><b><i><a  href="#">CSC1100-Computer Literary	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">CSK1101-Communication Skills	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">ECO1107-Microeconomics for Surveyors	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">EMT1105-Engineering Mathematics		</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">LAW1106-Basic Law and Governance Structures	 </a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">SUV 1105-Land Plan Drawing		</a></i></b></li>
                                {% endblock %}
                                </ul>
                              </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_4_course_2_courseunit_list_2 %}
                                <li class="course_units"><b><i><a  href="#">ECO1207-Macroeconomics for Surveyors	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">LAW1206-Law of Contract for Surveyors	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">LEC1201-Land Economics I	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">LEC1207-Real Estate Valuation I	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">LEC1301-Measured Drawing	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS1201-Construction Technology I	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS1202-Construction Drawing	</a></i></b></li>
                                {% endblock %}
                              </ul>
                            </li>
                            </ul>
                              </li>
                              {% endblock dept_4_course_2_year_1 %}

                              {% block dept_4_course_2_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                    <ul>
                        <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                              <ul>
                              {% block dept_4_course_2_courseunit_list_3 %}
                              <li class="course_units"><b><i><a  href="#">CMG2102-Construction Materials	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LAW2106-Law of Torts for Technology	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LEC 2101-Real Estate Valuation II		</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">QUS2101-Construction Technology II	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">QUS2102-Building Finishes and Fixtures	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">SOC2103-Sociology for Technology	</a></i></b></li>
                             {% endblock %}
                              </ul>
                        </li>
                          <li>
                            <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_4_course_2_courseunit_list_4 %}
                                <li class="course_units"><b><i><a  href="#">COE2203-Principles of Accounting	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">LAW2206-Commercial Law for Construction	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">LEC2201-Land Economics II		</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">QUS2204-Building Services		</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">SUV2207-Land Measurement Sciences	</a></i></b></li>
                                <li class="course_units"><b><i><a  href="#">SUV2208-Land Registration		</a></i></b></li>
                                {% endblock %}
                              </ul>
                          </li>
                    </ul>
                              </li>
                              {% endblock dept_4_course_2_year_2 %}

                              {% block dept_4_course_2_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_4_course_2_courseunit_list_5 %}
                              <li class="course_units"><b><i><a  href="#">CMG3103-Maintenance Management	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">CMG3103-Real Estate Development		</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LAW3108-Administrative and Local Government Law	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LAW3109-Real Property Law I	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LEC3101-Real Estate Valuation III	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LEC3102-Investment Appraisal I	</a></i></b></li>
                              {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_4_course_2_courseunit_list_6 %}
                              <li class="course_units"><b><i><a  href="#">COE3202-Entrepreneurship	</a></i></b></li>
                              <li class="course_units"><b><i><a  href ="#">DEC3202-Development Economics for Construction	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LEC3201-Urban & Regional Planning		</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LEC3202-Investment Appraisal II	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LEC3203-Property Economics	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LEC3204-Research Methods & Statistics	</a></i></b></li>
                            {% endblock %}

                            </ul>
                     </li>
                  </ul>
                              </li>
                              {% endblock dept_4_course_2_year_3 %}

                              {% block dept_4_course_2_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_4_course_2_courseunit_list_7 %}
                              <li class="course_units"><b><i><a  href="#">LEC4101-Real Estate Valuation IV	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LEC4102-Property Management	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LEC4103-Professional Practice, Procedure& Ethics	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LEC4103-Land Policy Studies	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LEC4105-Real Estate Finance & Taxation	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">QUS4103-Building Surveying	</a></i></b></li>
                            {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_4_course_2_courseunit_list_8 %}
                              <li class="course_units"><b><i><a  href="#">ECO4207-Elements of Econometrics	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LAW4216-Real Property Law II	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LEC4201-Final Year Project I&II	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LEC4202-Property Investment Analysis	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">LEC4203-Property Marketing	</a></i></b></li>
                              <li class="course_units"><b><i><a  href="#">SUV4206-Geographical Information Systems	</a></i></b></li>
                          {% endblock %}
                          </ul>
            </li>
            </ul>
                              </li>
                              {% endblock dept_4_course_2_year_4 %}
                              
                              {% block dept_4_course_2_year_5 %}
                              <li class="std-yr"><b><i>YEAR FIVE</i></b>
                                <ul>
                                  <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                          {% block dept_4_course_2_courseunit_list_9 %}
                                          <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                  </li>
                                  <li>
                                      <b class="sem"><i>SEMESTER TWO</i></b>
                                        <ul>
                                          {% block dept_4_course_2_courseunit_list_10 %}
                                        <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                      {% endblock %}
                                      </ul>
                        </li>
                        </ul>
                                          </li>
                              
                              {% endblock %}
                           </ul>
                     </li> 
                  {% endblock %}       
                  
                  {% block dept_4_course_list_3 %}
                      <li>
                        <input type="checkbox" class="course-checkbox" id="dept_4_course3-checkbox" autocomplete="off" >
                        <label for="dept_4_course3-checkbox" class="course_label" >
                        <h4 class ="course_name" data-toggle="collapse" data-target="#dept_4_course3" aria-expanded="false"><b>{% block dept_4_course3_name %} Bachelor of Science In Construction Management {% endblock %}</b></h4>
                        </label>  
                        <ul class="collapse" id="dept_4_course3">
                            {% block dept_4_course_3_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_4_course_3_courseunit_list_1 %}
                                        <li class="course_units"><b><i><a  href="#">CIV1104-Elements of Geotechnical Engineering	</a></i></b></li>
                                        <li class="course_units"><b><i><a  href="#">CMG1101-Geophysical Environment		</a></i></b></li>
                                        <li class="course_units"><b><i><a  href="#">CMG1102-Building Science 1	</a></i></b></li>
                                        <li class="course_units"><b><i><a  href="#">CSK1101-Communication Skills	</a></i></b></li>
                                        <li class="course_units"><b><i><a  href="#">EMT1105-Engineering Mathematics	</a></i></b></li>
                                        {% endblock %}  
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_4_course_3_courseunit_list_2 %}
                                      <li class="course_units"><b><i><a  href="#">CIV1205-Elements of Structural Analysis	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMG1201-Financial Accounting		</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMG1202-Construction Management I		</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMG1205-Construction Drawing		</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">LAW1208-Business Law for Construction	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">QUS1201-Construction Technology I	</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                              {% endblock %}
                              {% block dept_4_course_3_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_4_course_3_courseunit_list_3 %}
                                      <li class="course_units"><b><i><a  href="#">CIV2107-Strength of Materials	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMG2101-Construction Materials	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMG2102-Construction Management II		</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">LAW2102-Labour Law for Construction		</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">QUS2101-Construction Technology II	 </a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">SOC2103-Sociology for Technology	</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_4_course_3_courseunit_list_4 %}
                                      <li class="course_units"><b><i><a  href="#">CMG2201-Cost Engineering	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMG2202-Measurement and Design Appraisal I		</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMG2203-Research Methods & Statistics	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">LAW2206-Commercial Law for Construction		</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">QUS2202-Building Services	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">SUV2206-Land Surveying for Construction	</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                  </li>
                            </ul>
                              </li>
                              {% endblock %}
                              {% block dept_4_course_3_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_4_course_3_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a  href="#">CMG3101-Construction Costing	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMG3102-Measurement and Design Appraisal II	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMG3103-Maintenance Management	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMG3104-Professional Communication	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMG3105-Elements of Highway Engineering	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">QUS3101-Construction Technology III	</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_4_course_3_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a  href="#">CMG3202-Professional Practice, Procedure & Ethics	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMG3203-Construction Marketing	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">QUS3203-Construction Contract Administration	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">COE3202-Entrepreneurship	</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">CMG3201-Final Year Project	 </a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                              {% block dept_4_course_3_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_4_course_3_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_4_course_3_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock  %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                           </ul>
                    </li>
                  {% endblock %}
                  {% block dept_4_course_list_4 %}
                    <li>
                      <input type="checkbox" class="course-checkbox" id="dept_4_course4-checkbox" autocomplete="off" >
                      <label for="dept_4_course4-checkbox" class="course_label" >
                          <h4 class ="course_name" data-toggle="collapse" data-target="#dept_4_course4" aria-expanded="false"><b>{% block dept_4_course4_name %} Bachelor Of Science In Biomedical Engineering{% endblock %}</b></h4>
                         </label>
                          <ul class="collapse" id="dept_4_course4">
                            {% block dept_4_course_4_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_4_course_4_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                     {% block dept_4_course_4_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}  
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                            {% endblock %}
                            {% block dept_4_course_4_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_4_course_4_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_4_course_4_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %} 
                                      </ul>
                                  </li>
                            </ul>
                              </li>  
                            {% endblock %}
                            {% block dept_4_course_4_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_4_course_4_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                  {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_4_course_4_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                   {% endblock %} 
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                            {% block dept_4_course_4_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_4_course_4_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_4_course_4_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                        </ul>
                    </li>
                {% endblock %}
                </ul>
      </div>
{% endblock %}
{% endblock %}
{% block sch_2_dept_2 %}
{% block dept_6 %}
      <strong><h3 class="dept_name">{% block dept5_name %} Department of Geomatics & Land Management {% endblock %}</h3></strong>
    {% endblock %}
    {% block faculty_course_6 %}
      <div class="dept-courses">
                <ul class="courses">
                  {% block dept_5_course_list_1 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_5_course1-checkbox" autocomplete="off" >
                      <label for="dept_5_course1-checkbox" class="course_label" >
                        <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_5_course1" aria-expanded="false"><b>{% block dept_5_course1_name %} Bachelor of science in Land Surveying & Geomatics  {% endblock %}</b></h4>
                        </label>    
                        <ul class="collapse"  id="dept_5_course1">
                              {% block dept_5_course_1_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                    <ul>
                                  <li>
                                    <strong><b class="sem"><i>SEMESTER ONE</i></b></strong>
                                    <ul>
                                      {% block dept_5_course_1_courseunit_list_1 %}
                                      <li class="course_units"><b><i><a  href="#">SUV1101-Principles Of Surveying</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">TEC1101-Communication Skills for Technology</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">EMT1102-Surveying Mathematics I</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">SUV1102-Physics Of Surveyors</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">SUV1103-Plan Drawing</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="#">SUV1104-Natural Environmental Studies</a></i></b></li>
                                      {% endblock %}
                                    </ul>
                                  </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                    {% block dept_5_course_1_courseunit_list_2 %}
                                    <li class="course_units"><b><i><a  href="#">SUV1201-Introduction to Advanced Surveying</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">SUV1202-Measurement Science</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">SUV1203-Land Economy I</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">SUV1204-Economics for Surveyors</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">SUV1205-Computer Studies for Surveyors I</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">SUV1206-Engineering Surveying</a></i></b></li>
                                  {% endblock %}
                                    </ul>
                                </li>
                                </ul>
                              </li>
                              {% endblock dept_5_course_1_year_1 %}

                              {% block dept_5_course_1_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                        <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                  <ul>
                                    {% block dept_5_course_1_courseunit_list_3 %}
                                    <li class="course_units"><b><i><a  href="#">SUV2101-Cartography</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">TEC2101-Sociology for Technology</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">EMT2102-Survey Mathematics II</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">SUV2102-Building Economics I</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">SUV2103-Land Economy II</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="#">SUV2104-Map Projections</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                            </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                  {% block dept_5_course_1_courseunit_list_4 %}
                                   <li class="course_units"><b><i><a  href="#">SUV2201-Principles Of Landscape Design</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">SUV2202-Photogrammetry I</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">SUV2203-Hydrographic Surveying</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">SUV2204-Computer Studies For Surveyors</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">SUV2205-Land Law For Surveyors</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">Field Training for Surveyors I</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                              </li>
                        </ul>
                              </li>
                              {% endblock dept_5_course_1_year_2 %}

                              {% block dept_5_course_1_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                  {% block dept_5_course_1_courseunit_list_5 %}
                                  <li class="course_units"><b><i><a href="#">EMT3101-Survey Mathematics III</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">SUV3101-Survey Adjustments I</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">SUV3102-land Registration</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">SUV3103-Photogrammetry II</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">SUV3104-Physical Geodesy</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">SUV3105-Research Methods For Surveyors</a></i></b></li>
                                  {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_5_course_1_courseunit_list_6 %}
                                  <li class="course_units"><b><i><a href="#">SUV3201-Geographical Information Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">SUV3202-Survey Adjustments II</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">SUV3203-Geometric Geodesy</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">SUV3204-Building Economics II</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">SUV3205-Land Economy III</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">SUV3206-Remote Sensing</a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_5_course_1_year_3 %}
                              {% block dept_5_course_1_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_5_course_1_courseunit_list_7 %}
                                  <li class="course_units"><b><i><a href="#">SUV4101-Land Development</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">SUV4102-Cadastral Surveying</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">SUV4103-Professional Practice for Surveyors</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">SUV4104-Geodetic Astronomy</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">SUV4105-Survey Project</a></i></b></li>
                                {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_5_course_1_courseunit_list_8 %}   
                                <li class="course_units"><b><i><a href="#">SUV4201-Business Management for Surveyors</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">SUV4202-Satellite Geodesy</a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_5_course_1_year_4 %}
                            </ul>
                     </li>
                  {% endblock %}
                  {% block dept_5_course_list_2 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_5_course2-checkbox" autocomplete="off" >
                      <label for="dept_5_course2-checkbox" class="course_label" >
                        <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_5_course2" aria-expanded="false"><b>{% block dept_5_course2_name %} Bachelor of science in Elecrical Engineering {% endblock %}</b></h4>
                        </label>    
                        <ul class="collapse"  id="dept_5_course2">
                              {% block dept_5_course_2_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                 <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_5_course_2_courseunit_list_1 %}
                                  <li class="course_units"><b><i><a href="EMT1101.html">EMT1101-Engineering Mathematics I</a></i></b></li>
                                  <li class="course_units"><b><i><a href="ELE1102-Physical Electronics.html">ELE1104-Physical Electronics</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE1105-Circuit Theory </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP1103-Information & Communication Technology</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE1112-Introduction To Electrical Engineering and Society </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">UNI1001-Communication Skills </a></i></b></li>
                                {% endblock %}
                                </ul>
                              </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_5_course_2_courseunit_list_2 %}
                                 <li class="course_units"><b><i><a href="#">EMT1201-Engineering Mathematics II</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE1201-Introduction To Digital Electronics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="ELE1204-Statics & Dynamics.html">ELE1204-Statics & Dynamics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE1205-Electrical Materials </a></i></b></li>
                                 <li class="course_units"><b><i><a href="socialogy-for-technology.html">TEC1202-Introduction To Sociology </a></i></b></li>
                                {% endblock %}
                              </ul>
                            </li>
                            </ul>
                              </li>
                              {% endblock dept_5_course_2_year_1 %}

                              {% block dept_5_course_2_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                    <ul>
                        <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                              <ul>
                              {% block dept_5_course_2_courseunit_list_3 %}
                                <li class="course_units"><b><i><a href="#">EMT2101-Engineering Mathematics III</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CMP2103-Object Oriented Programming</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2102-Electronic Circuits</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2111-Network Theory</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2112-Electromagnetics</a></i></b></li>
                             {% endblock %}
                              </ul>
                        </li>
                          <li>
                            <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_5_course_2_courseunit_list_4 %}
                               <li class="course_units"><b><i><a href="#">EMT2201-Engineering Mathematics IV</a></i></b></li>


                               <!--<li><b><i><a style="color:blue;" href = "programming.html">ELE2201-Power Systems Theory</a></i></b></li>
                               <li><b><i><a style="color:blue;" href="#">ELE2203-Network Theory I</a></i></b></li>
                               <li><b><i><a style="color:blue;" href="#">ELE2204-Economics For Elecrical Engineers</a></i></b></li>-->
                               <li class="course_units"><b><i><a href="#">ELE2211-Electromagnetic Fields</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE2212-Electrical Energy Systems</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE2213-Instrumentation</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">TEC2202-Technology,Ethics & Human Rights</a></i></b></li>
                                {% endblock %}
                              </ul>
                          </li>
                    </ul>
                              </li>
                              {% endblock dept_5_course_2_year_2 %}

                              {% block dept_5_course_2_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_5_course_2_courseunit_list_5 %}
                              <li class="course_units"><b><i><a href="#">COE3100-Entrepreneurship</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3102-Applied Analogue Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3103-Applied Digital Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3112-Radio Wave Propagation & Antennas</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3113-Power Systems Theory</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3114-Electrical Machines & Drives I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3111-Communication Theory</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">LAW1104-Law of Contracts </a></i></b></li>
                              {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_5_course_2_courseunit_list_6 %}
                              <li class="course_units"><b><i><a href="#">ELE3211-Industrial Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3202-Control Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3203-Power Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3204-Communication Engineering I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3205-Electrical Machines & Drives II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3215-Power Systems Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">EMT3201-Engineering Mathematics VI</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3214-Computer Communication Networks</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3216-Energy Conversion And Generation</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3212-Digital Communications Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3217-Systems Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">Mobile Communication Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">COE1102-Fundamental Acccounts Principles</a></i></b></li>
                            {% endblock %}

                            </ul>
                     </li>
                  </ul>
                              </li>
                              {% endblock dept_5_course_2_year_3 %}

                              {% block dept_5_course_2_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_5_course_2_courseunit_list_7 %}
                              <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                              <li class="course_units"><b><i><a href="#"></a></i></b></li>
                            {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_5_course_2_courseunit_list_8 %}
                            <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                            <li class="course_units"><b><i><a href="#"></a></i></b></li>
                          {% endblock %}
                          </ul>
            </li>
            </ul>
                              </li>
                              {% endblock dept_5_course_2_year_4 %}
                              
                              {% block dept_5_course_2_year_5 %}
                              <li class="std-yr"><b><i>YEAR FIVE</i></b>
                                <ul>
                                  <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                          {% block dept_5_course_2_courseunit_list_9 %}
                                          <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                  </li>
                                  <li>
                                      <b class="sem"><i>SEMESTER TWO</i></b>
                                        <ul>
                                          {% block dept_5_course_2_courseunit_list_10 %}
                                        <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                      {% endblock %}
                                      </ul>
                        </li>
                        </ul>
                                          </li>
                              
                              {% endblock %}
                           </ul>
                     </li> 
                  {% endblock %}       
                  
                  {% block dept_5_course_list_3 %}
                      <li>
                        <input type="checkbox" class="course-checkbox" id="dept_5_course3-checkbox" autocomplete="off" >
                        <label for="dept_5_course3-checkbox" class="course_label" >
                        <h4 class ="course_name" data-toggle="collapse" data-target="#dept_5_course3" aria-expanded="false"><b>{% block dept_5_course3_name %} Bachelor of Science In Telecommunication Engineering {% endblock %}</b></h4>
                        </label>   
                        <ul class="collapse" id="dept_5_course3">
                            {% block dept_5_course_3_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_5_course_3_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}  
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_5_course_3_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                              {% endblock %}
                              {% block dept_5_course_3_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_5_course_3_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_5_course_3_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                  </li>
                            </ul>
                              </li>
                              {% endblock %}
                              {% block dept_5_course_3_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_5_course_3_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_5_course_3_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                              {% block dept_5_course_3_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_5_course_3_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_5_course_3_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock  %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                           </ul>
                    </li>
                  {% endblock %}
                  {% block dept_5_course_list_4 %}
                    <li>
                      <input type="checkbox" class="course-checkbox" id="dept_5_course4-checkbox" autocomplete="off" >
                      <label for="dept_5_course4-checkbox" class="course_label" >
                          <h4 class ="course_name" data-toggle="collapse" data-target="#dept_5_course4" aria-expanded="false"><b>{% block dept_5_course4_name %} Bachelor Of Science In Biomedical Engineering{% endblock %}</b></h4>
                      </label>  
                        <ul class="collapse" id="dept_5_course4">
                            {% block dept_5_course_4_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_5_course_4_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                     {% block dept_5_course_4_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}  
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                            {% endblock %}
                            {% block dept_5_course_4_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_5_course_4_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_5_course_4_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %} 
                                      </ul>
                                  </li>
                            </ul>
                              </li>  
                            {% endblock %}
                            {% block dept_5_course_4_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_5_course_4_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                  {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_5_course_4_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                   {% endblock %} 
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                            {% block dept_5_course_4_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_5_course_4_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_5_course_4_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                        </ul>
                    </li>
                {% endblock %}
                </ul>
      </div>
{% endblock %}
{% endblock %}
{% block sch_2_dept_3 %}
{% block dept_7 %}
      <strong><h3 class="dept_name">{% block dept6_name %} Department of Architecture & Physical Planning {% endblock %}</h3></strong>
     {% endblock %}
     {% block faculty_course_7 %}
      <div class="dept-courses">
                <ul class="courses">
                  {% block dept_6_course_list_1 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_6_course1-checkbox" autocomplete="off" >
                      <label for="dept_6_course1-checkbox" class="course_label" >
                        <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_6_course1" aria-expanded="false"><b>{% block dept_6_course1_name %} Bachelor of Urban & Regional Planning {% endblock %}</b></h4>
                        </label>    
                        <ul class="collapse"  id="dept_6_course1">
                              {% block dept_6_course_1_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                    <ul>
                                      <li>
                                    <strong><b class="sem"><i>SEMESTER ONE</i></b></strong>
                                    <ul>
                                      {% block dept_6_course_1_courseunit_list_1 %}
                                      <li class="course_units"><b><i><a  href="EMT1101.html">EMT1101-Engineering Math I</a></i></b></li>
                                      <li class="course_units"><b><i><a href="CMP1101-electronics1.html"> CMP1101-Electronics I</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="ethics.html">CMP1102-Computer Engineering Ethics</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="CMP1103-ict.html">CMP1103-Information & Communication Technology</a></i></b></li>
                                      <li class="course_units"><b><i><a href="communication skills.html">UNI1001-Communication Skills </a></i></b></li>
                                      {% endblock %}
                                    </ul>
                                  </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                    {% block dept_6_course_1_courseunit_list_2 %}
                                     <li class="course_units"><b><i><a  href="EMT1201.html">EMT1201-Engineering Math II</a></i></b></li>
                                     <li class="course_units"><b><i><a  href = "computer programming fundamentals-muk.html">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                                     <li class="course_units"><b><i><a  href="CMP1202-electronics2.html">CMP1202-Electronics II</a></i></b></li>
                                     <li class="course_units"><b><i><a  href="CMP1203-Computer-architecure&organisation.html">CMP1203-Computer Architecture & Organization</a></i></b></li>
                                     <li class="course_units"><b><i><a  href="ELE1202-electricity&magnetism.html">ELE1202-Electricity & Magnetism </a></i></b></li>
                                  {% endblock %}
                                    </ul>
                                </li>
                                </ul>
                              </li>
                              {% endblock dept_6_course_1_year_1 %}

                              {% block dept_6_course_1_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                        <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                  <ul>
                                    {% block dept_6_course_1_courseunit_list_3 %}
                                    <li class="course_units"><b><i><a  href="#">EMT2101-Engineering Math III</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="software-engineering.html">CMP2101-Software Engineering</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="CMP2102-electric _circuits_and_signals.html">CMP2102-Electric Circuits and Signals</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="CMP2103-OOP.html">CMP2103-Object Oriented Programming</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="socialogy-for-technology.html">TEC2101-Sociology For Technology</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                            </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                  {% block dept_6_course_1_courseunit_list_4 %}
                                   <li class="course_units"><b><i><a  href="#">CMP2201-Discrete Mathematics and Random Processes</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2202-Analysis and Design Of Algorithms</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2203-Digital Logic</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2204-Operating Systems Technologies</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2205-Computer Networks</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                              </li>
                        </ul>
                              </li>
                              {% endblock dept_6_course_1_year_2 %}

                              {% block dept_6_course_1_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                  {% block dept_6_course_1_courseunit_list_5 %}
                                  <li class="course_units"><b><i><a href="#">CMP3101-Database Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3104-Computer Based Medical Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE3101-Electro Magnetic Fields</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE3102-Applied Analouge Electronics</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">EMT3105-Engineering Mathematics V</a></i></b></li>
                                  {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_6_course_1_courseunit_list_6 %}
                                  <li class="course_units"><b><i><a href="#">CMP3201-Embedded Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3202-Human Computer Interaction</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3203-Computer Systems Maintenance</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3204-Distributed Information Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3205-Intelligent Systems </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3206-Saftey Critical System </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3207-Sustainable Energy Systems </a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_6_course_1_year_3 %}
                              {% block dept_6_course_1_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_6_course_1_courseunit_list_7 %}
                                  <li class="course_units"><b><i><a href="#">CMP4101-Digital Signal Processing</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4102-Instrumention and Control Engineering</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems and Network Security</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and Video Processing</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">TEC4101-Research Methods </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">TEC4102-Principles of Management </a></i></b></li>
                                {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_6_course_1_courseunit_list_8 %}
                                  <li class="course_units"><b><i><a href="#">CMP4201-Research Project</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4204-Wireless Technologies</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4205-Audio and Speech Signal Processing</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE4201-Project </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">TEC4201-Entrepreneurship </a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_6_course_1_year_4 %}
                            </ul>
                     </li>
                  {% endblock %}
                  {% block dept_6_course_list_2 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_6_course2-checkbox" autocomplete="off" >
                      <label for="dept_6_course2-checkbox" class="course_label" >
                        <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_6_course2" aria-expanded="false"><b>{% block dept_6_course2_name %} Bachelor of Science In Architecture{% endblock %}</b></h4>
                        </label>    
                        <ul class="collapse"  id="dept_6_course2">
                              {% block dept_6_course_2_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                 <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_6_course_2_courseunit_list_1 %}
                                  <li class="course_units"><b><i><a href="EMT1101.html">EMT1101-Engineering Mathematics I</a></i></b></li>
                                  <li class="course_units"><b><i><a href="ELE1102-Physical Electronics.html">ELE1104-Physical Electronics</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE1105-Circuit Theory </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP1103-Information & Communication Technology</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE1112-Introduction To Electrical Engineering and Society </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">UNI1001-Communication Skills </a></i></b></li>
                                {% endblock %}
                                </ul>
                              </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_6_course_2_courseunit_list_2 %}
                                 <li class="course_units"><b><i><a href="#">EMT1201-Engineering Mathematics II</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE1201-Introduction To Digital Electronics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="ELE1204-Statics & Dynamics.html">ELE1204-Statics & Dynamics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE1205-Electrical Materials </a></i></b></li>
                                 <li class="course_units"><b><i><a href="socialogy-for-technology.html">TEC1202-Introduction To Sociology </a></i></b></li>
                                {% endblock %}
                              </ul>
                            </li>
                            </ul>
                              </li>
                              {% endblock dept_6_course_2_year_1 %}

                              {% block dept_6_course_2_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                    <ul>
                        <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                              <ul>
                              {% block dept_6_course_2_courseunit_list_3 %}
                                <li class="course_units"><b><i><a href="#">EMT2101-Engineering Mathematics III</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CMP2103-Object Oriented Programming</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2102-Electronic Circuits</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2111-Network Theory</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2112-Electromagnetics</a></i></b></li>
                             {% endblock %}
                              </ul>
                        </li>
                          <li>
                            <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_6_course_2_courseunit_list_4 %}
                               <li class="course_units"><b><i><a href="#">EMT2201-Engineering Mathematics IV</a></i></b></li>


                               <!--<li><b><i><a style="color:blue;" href = "programming.html">ELE2201-Power Systems Theory</a></i></b></li>
                               <li><b><i><a style="color:blue;" href="#">ELE2203-Network Theory I</a></i></b></li>
                               <li><b><i><a style="color:blue;" href="#">ELE2204-Economics For Elecrical Engineers</a></i></b></li>-->
                               <li class="course_units"><b><i><a href="#">ELE2211-Electromagnetic Fields</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE2212-Electrical Energy Systems</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE2213-Instrumentation</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">TEC2202-Technology,Ethics & Human Rights</a></i></b></li>
                                {% endblock %}
                              </ul>
                          </li>
                    </ul>
                              </li>
                              {% endblock dept_6_course_2_year_2 %}

                              {% block dept_6_course_2_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_6_course_2_courseunit_list_5 %}
                              <li class="course_units"><b><i><a href="#">COE3100-Entrepreneurship</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3102-Applied Analogue Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3103-Applied Digital Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3112-Radio Wave Propagation & Antennas</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3113-Power Systems Theory</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3114-Electrical Machines & Drives I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3111-Communication Theory</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">LAW1104-Law of Contracts </a></i></b></li>
                              {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_6_course_2_courseunit_list_6 %}
                              <li class="course_units"><b><i><a href="#">ELE3211-Industrial Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3202-Control Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3203-Power Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3204-Communication Engineering I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3205-Electrical Machines & Drives II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3215-Power Systems Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">EMT3201-Engineering Mathematics VI</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3214-Computer Communication Networks</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3216-Energy Conversion And Generation</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3212-Digital Communications Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3217-Systems Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">Mobile Communication Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">COE1102-Fundamental Acccounts Principles</a></i></b></li>
                            {% endblock %}

                            </ul>
                     </li>
                  </ul>
                              </li>
                              {% endblock dept_6_course_2_year_3 %}

                              {% block dept_6_course_2_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_6_course_2_courseunit_list_7 %}
                              <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                              <li class="course_units"><b><i><a href="#"></a></i></b></li>
                            {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_6_course_2_courseunit_list_8 %}
                            <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                            <li class="course_units"><b><i><a href="#"></a></i></b></li>
                          {% endblock %}
                          </ul>
            </li>
            </ul>
                              </li>
                              {% endblock dept_6_course_2_year_4 %}
                              
                              {% block dept_6_course_2_year_5 %}
                              <li class="std-yr"><b><i>YEAR FIVE</i></b>
                                <ul>
                                  <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                          {% block dept_6_course_2_courseunit_list_9 %}
                                          <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                  </li>
                                  <li>
                                      <b class="sem"><i>SEMESTER TWO</i></b>
                                        <ul>
                                          {% block dept_6_course_2_courseunit_list_10 %}
                                        <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                      {% endblock %}
                                      </ul>
                        </li>
                        </ul>
                                          </li>
                              
                              {% endblock %}
                           </ul>
                     </li> 
                  {% endblock %}       
                  
                  {% block dept_6_course_list_3 %}
                      <li>
                        <input type="checkbox" class="course-checkbox" id="dept_6_course3-checkbox" autocomplete="off" >
                        <label for="dept_6_course3-checkbox" class="course_label" >
                        <h4 class ="course_name" data-toggle="collapse" data-target="#dept_6_course3" aria-expanded="false"><b>{% block dept_6_course3_name %} Bachelor of Science In Telecommunication Engineering {% endblock %}</b></h4>
                        </label>  
                        <ul class="collapse" id="dept_6_course3">
                            {% block dept_6_course_3_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_6_course_3_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}  
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_6_course_3_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                              {% endblock %}
                              {% block dept_6_course_3_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_6_course_3_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_6_course_3_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                  </li>
                            </ul>
                              </li>
                              {% endblock %}
                              {% block dept_6_course_3_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_6_course_3_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_6_course_3_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                              {% block dept_6_course_3_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_6_course_3_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_6_course_3_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock  %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                           </ul>
                    </li>
                  {% endblock %}
                  {% block dept_6_course_list_4 %}
                    <li>
                      <input type="checkbox" class="course-checkbox" id="dept_6_course4-checkbox" autocomplete="off" >
                      <label for="dept_6_course4-checkbox" class="course_label" >
                          <h4 class ="course_name" data-toggle="collapse" data-target="#dept_6_course4" aria-expanded="false"><b>{% block dept_6_course4_name %} Bachelor Of Science In Biomedical Engineering{% endblock %}</b></h4>
                        </label>  
                        <ul class="collapse" id="dept_6_course4">
                            {% block dept_6_course_4_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_6_course_4_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                     {% block dept_6_course_4_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}  
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                            {% endblock %}
                            {% block dept_6_course_4_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_6_course_4_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_6_course_4_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %} 
                                      </ul>
                                  </li>
                            </ul>
                              </li>  
                            {% endblock %}
                            {% block dept_6_course_4_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_6_course_4_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                  {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_6_course_4_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                   {% endblock %} 
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                            {% block dept_6_course_4_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_6_course_4_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_6_course_4_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                        </ul>
                    </li>
                {% endblock %}
                </ul>
      </div>
{% endblock %}
{% endblock %}

{% endblock %}
{% block col_sch_3 %}
  {% block sch3_title_box %}<div class="sch_title_box"><h2 class="sch_title"><b>{% block sch3_title %} MARGARET TROWELL SCHOOL OF INDUSTRIAL & FINE ART {% endblock %}</b> </h2></div> {% endblock %}
  {% block sch_3_dept_1 %}
  {% block dept_8 %}
      <strong><h3 class="dept_name">{% block dept7_name %} Department of Fine Art {% endblock %}</h3></strong>
      {% endblock %}
      <div class="dept-courses">
                <ul class="courses">
                  {% block dept_7_course_list_1 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_7_course1-checkbox" autocomplete="off" >
                      <label for="dept_7_course1-checkbox" class="course_label" >
                        <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_7_course1" aria-expanded="false"><b>{% block dept_7_course1_name %} Bachelor of Fine Art {% endblock %}</b></h4>
                        </label>   
                        <ul class="collapse"  id="dept_7_course1">
                              {% block dept_7_course_1_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                    <ul>
                                      <li>
                                    <strong><b class="sem"><i>SEMESTER ONE</i></b></strong>
                                    <ul>
                                      {% block dept_7_course_1_courseunit_list_1 %}
                                      <li class="course_units"><b><i><a  href="EMT1101.html">EMT1101-Engineering Math I</a></i></b></li>
                                      <li class="course_units"><b><i><a href="CMP1101-electronics1.html"> CMP1101-Electronics I</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="ethics.html">CMP1102-Computer Engineering Ethics</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="CMP1103-ict.html">CMP1103-Information & Communication Technology</a></i></b></li>
                                      <li class="course_units"><b><i><a href="communication skills.html">UNI1001-Communication Skills </a></i></b></li>
                                      {% endblock %}
                                    </ul>
                                  </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                    {% block dept_7_course_1_courseunit_list_2 %}
                                     <li class="course_units"><b><i><a  href="EMT1201.html">EMT1201-Engineering Math II</a></i></b></li>
                                     <li class="course_units"><b><i><a  href = "computer programming fundamentals-muk.html">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                                     <li class="course_units"><b><i><a  href="CMP1202-electronics2.html">CMP1202-Electronics II</a></i></b></li>
                                     <li class="course_units"><b><i><a  href="CMP1203-Computer-architecure&organisation.html">CMP1203-Computer Architecture & Organization</a></i></b></li>
                                     <li class="course_units"><b><i><a  href="ELE1202-electricity&magnetism.html">ELE1202-Electricity & Magnetism </a></i></b></li>
                                  {% endblock %}
                                    </ul>
                                </li>
                                </ul>
                              </li>
                              {% endblock dept_7_course_1_year_1 %}

                              {% block dept_7_course_1_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                        <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                  <ul>
                                    {% block dept_7_course_1_courseunit_list_3 %}
                                    <li class="course_units"><b><i><a  href="#">EMT2101-Engineering Math III</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="software-engineering.html">CMP2101-Software Engineering</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="CMP2102-electric _circuits_and_signals.html">CMP2102-Electric Circuits and Signals</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="CMP2103-OOP.html">CMP2103-Object Oriented Programming</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="socialogy-for-technology.html">TEC2101-Sociology For Technology</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                            </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                  {% block dept_7_course_1_courseunit_list_4 %}
                                   <li class="course_units"><b><i><a  href="#">CMP2201-Discrete Mathematics and Random Processes</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2202-Analysis and Design Of Algorithms</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2203-Digital Logic</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2204-Operating Systems Technologies</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2205-Computer Networks</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                              </li>
                        </ul>
                              </li>
                              {% endblock dept_7_course_1_year_2 %}

                              {% block dept_7_course_1_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                  {% block dept_7_course_1_courseunit_list_5 %}
                                  <li class="course_units"><b><i><a href="#">CMP3101-Database Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3104-Computer Based Medical Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE3101-Electro Magnetic Fields</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE3102-Applied Analouge Electronics</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">EMT3105-Engineering Mathematics V</a></i></b></li>
                                  {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_7_course_1_courseunit_list_6 %}
                                  <li class="course_units"><b><i><a href="#">CMP3201-Embedded Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3202-Human Computer Interaction</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3203-Computer Systems Maintenance</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3204-Distributed Information Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3205-Intelligent Systems </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3206-Saftey Critical System </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3207-Sustainable Energy Systems </a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_7_course_1_year_3 %}
                              {% block dept_7_course_1_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_7_course_1_courseunit_list_7 %}
                                  <li class="course_units"><b><i><a href="#">CMP4101-Digital Signal Processing</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4102-Instrumention and Control Engineering</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems and Network Security</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and Video Processing</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">TEC4101-Research Methods </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">TEC4102-Principles of Management </a></i></b></li>
                                {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_7_course_1_courseunit_list_8 %}
                                  <li class="course_units"><b><i><a href="#">CMP4201-Research Project</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4204-Wireless Technologies</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4205-Audio and Speech Signal Processing</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE4201-Project </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">TEC4201-Entrepreneurship </a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_7_course_1_year_4 %}
                            </ul>
                     </li>
                  {% endblock %}
                  {% block dept_7_course_list_2 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_7_course2-checkbox" autocomplete="off" >
                      <label for="dept_7_course2-checkbox" class="course_label" >
                        <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_7_course2" aria-expanded="false"><b>{% block dept_7_course2_name %} Bachelor of science in Elecrical Engineering {% endblock %}</b></h4>
                        </label>    
                        <ul class="collapse"  id="dept_7_course2">
                              {% block dept_7_course_2_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                 <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_7_course_2_courseunit_list_1 %}
                                  <li class="course_units"><b><i><a href="EMT1101.html">EMT1101-Engineering Mathematics I</a></i></b></li>
                                  <li class="course_units"><b><i><a href="ELE1102-Physical Electronics.html">ELE1104-Physical Electronics</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE1105-Circuit Theory </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP1103-Information & Communication Technology</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE1112-Introduction To Electrical Engineering and Society </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">UNI1001-Communication Skills </a></i></b></li>
                                {% endblock %}
                                </ul>
                              </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_7_course_2_courseunit_list_2 %}
                                 <li class="course_units"><b><i><a href="#">EMT1201-Engineering Mathematics II</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE1201-Introduction To Digital Electronics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="ELE1204-Statics & Dynamics.html">ELE1204-Statics & Dynamics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE1205-Electrical Materials </a></i></b></li>
                                 <li class="course_units"><b><i><a href="socialogy-for-technology.html">TEC1202-Introduction To Sociology </a></i></b></li>
                                {% endblock %}
                              </ul>
                            </li>
                            </ul>
                              </li>
                              {% endblock dept_7_course_2_year_1 %}

                              {% block dept_7_course_2_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                    <ul>
                        <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                              <ul>
                              {% block dept_7_course_2_courseunit_list_3 %}
                                <li class="course_units"><b><i><a href="#">EMT2101-Engineering Mathematics III</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CMP2103-Object Oriented Programming</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2102-Electronic Circuits</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2111-Network Theory</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2112-Electromagnetics</a></i></b></li>
                             {% endblock %}
                              </ul>
                        </li>
                          <li>
                            <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_7_course_2_courseunit_list_4 %}
                               <li class="course_units"><b><i><a href="#">EMT2201-Engineering Mathematics IV</a></i></b></li>


                               <!--<li><b><i><a style="color:blue;" href = "programming.html">ELE2201-Power Systems Theory</a></i></b></li>
                               <li><b><i><a style="color:blue;" href="#">ELE2203-Network Theory I</a></i></b></li>
                               <li><b><i><a style="color:blue;" href="#">ELE2204-Economics For Elecrical Engineers</a></i></b></li>-->
                               <li class="course_units"><b><i><a href="#">ELE2211-Electromagnetic Fields</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE2212-Electrical Energy Systems</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE2213-Instrumentation</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">TEC2202-Technology,Ethics & Human Rights</a></i></b></li>
                                {% endblock %}
                              </ul>
                          </li>
                    </ul>
                              </li>
                              {% endblock dept_7_course_2_year_2 %}

                              {% block dept_7_course_2_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_7_course_2_courseunit_list_5 %}
                              <li class="course_units"><b><i><a href="#">COE3100-Entrepreneurship</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3102-Applied Analogue Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3103-Applied Digital Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3112-Radio Wave Propagation & Antennas</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3113-Power Systems Theory</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3114-Electrical Machines & Drives I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3111-Communication Theory</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">LAW1104-Law of Contracts </a></i></b></li>
                              {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_7_course_2_courseunit_list_6 %}
                              <li class="course_units"><b><i><a href="#">ELE3211-Industrial Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3202-Control Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3203-Power Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3204-Communication Engineering I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3205-Electrical Machines & Drives II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3215-Power Systems Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">EMT3201-Engineering Mathematics VI</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3214-Computer Communication Networks</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3216-Energy Conversion And Generation</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3212-Digital Communications Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3217-Systems Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">Mobile Communication Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">COE1102-Fundamental Acccounts Principles</a></i></b></li>
                            {% endblock %}

                            </ul>
                     </li>
                  </ul>
                              </li>
                              {% endblock dept_7_course_2_year_3 %}

                              {% block dept_7_course_2_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_7_course_2_courseunit_list_7 %}
                              <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                              <li class="course_units"><b><i><a href="#"></a></i></b></li>
                            {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_7_course_2_courseunit_list_8 %}
                            <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                            <li class="course_units"><b><i><a href="#"></a></i></b></li>
                          {% endblock %}
                          </ul>
            </li>
            </ul>
                              </li>
                              {% endblock dept_7_course_2_year_4 %}
                              
                              {% block dept_7_course_2_year_5 %}
                              <li class="std-yr"><b><i>YEAR FIVE</i></b>
                                <ul>
                                  <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                          {% block dept_7_course_2_courseunit_list_9 %}
                                          <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                  </li>
                                  <li>
                                      <b class="sem"><i>SEMESTER TWO</i></b>
                                        <ul>
                                          {% block dept_7_course_2_courseunit_list_10 %}
                                        <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                      {% endblock %}
                                      </ul>
                        </li>
                        </ul>
                                          </li>
                              
                              {% endblock %}
                           </ul>
                     </li> 
                  {% endblock %}       
                  
                  {% block dept_7_course_list_3 %}
                      <li>
                        <input type="checkbox" class="course-checkbox" id="dept_7_course3-checkbox" autocomplete="off" >
                        <label for="dept_7_course3-checkbox" class="course_label" >
                        <h4 class ="course_name" data-toggle="collapse" data-target="#dept_7_course3" aria-expanded="false"><b>{% block dept_7_course3_name %} Bachelor of Science In Telecommunication Engineering {% endblock %}</b></h4>
                        </label>   
                        <ul class="collapse" id="dept_7_course3">
                            {% block dept_7_course_3_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_7_course_3_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}  
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_7_course_3_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                              {% endblock %}
                              {% block dept_7_course_3_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_7_course_3_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_7_course_3_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                  </li>
                            </ul>
                              </li>
                              {% endblock %}
                              {% block dept_7_course_3_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_7_course_3_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_7_course_3_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                              {% block dept_7_course_3_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_7_course_3_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_7_course_3_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock  %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                           </ul>
                    </li>
                  {% endblock %}
                  {% block dept_7_course_list_4 %}
                    <li>
                      <input type="checkbox" class="course-checkbox" id="dept_7_course4-checkbox" autocomplete="off" >
                      <label for="dept_7_course4-checkbox" class="course_label" >
                          <h4 class ="course_name" data-toggle="collapse" data-target="#dept_7_course4" aria-expanded="false"><b>{% block dept_7_course4_name %} Bachelor Of Science In Biomedical Engineering{% endblock %}</b></h4>
                        </label>  
                        <ul class="collapse" id="dept_7_course4">
                            {% block dept_7_course_4_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_7_course_4_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                     {% block dept_7_course_4_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}  
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                            {% endblock %}
                            {% block dept_7_course_4_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_7_course_4_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_7_course_4_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %} 
                                      </ul>
                                  </li>
                            </ul>
                              </li>  
                            {% endblock %}
                            {% block dept_7_course_4_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_7_course_4_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                  {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_7_course_4_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                   {% endblock %} 
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                            {% block dept_7_course_4_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_7_course_4_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_7_course_4_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                        </ul>
                    </li>
                {% endblock %}
                </ul>
      </div>
{% endblock %}
{% block sch_3_dept_2 %}
{% block dept_9 %}
      <strong><h3 class="dept_name">{% block dept8_name %} Department of Industrial Art & Applied Design  {% endblock %}</h3></strong>
     {% endblock %}
      <div class="dept-courses">
                <ul class="courses">
                  {% block dept_8_course_list_1 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_8_course1-checkbox" autocomplete="off" >
                      <label for="dept_8_course1-checkbox" class="course_label" >
                        <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_8_course1" aria-expanded="false"><b>{% block dept_8_course1_name %} Bachelor of Arts in  Industrial & Applied Design {% endblock %}</b></h4>
                      </label>    
                        <ul class="collapse"  id="dept_8_course1">
                              {% block dept_8_course_1_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                    <ul>
                                      <li>
                                    <strong><b class="sem"><i>SEMESTER ONE</i></b></strong>
                                    <ul>
                                      {% block dept_8_course_1_courseunit_list_1 %}
                                      <li class="course_units"><b><i><a  href="EMT1101.html">EMT1101-Engineering Math I</a></i></b></li>
                                      <li class="course_units"><b><i><a href="CMP1101-electronics1.html"> CMP1101-Electronics I</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="ethics.html">CMP1102-Computer Engineering Ethics</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="CMP1103-ict.html">CMP1103-Information & Communication Technology</a></i></b></li>
                                      <li class="course_units"><b><i><a href="communication skills.html">UNI1001-Communication Skills </a></i></b></li>
                                      {% endblock %}
                                    </ul>
                                  </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                    {% block dept_8_course_1_courseunit_list_2 %}
                                     <li class="course_units"><b><i><a  href="EMT1201.html">EMT1201-Engineering Math II</a></i></b></li>
                                     <li class="course_units"><b><i><a  href = "computer programming fundamentals-muk.html">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                                     <li class="course_units"><b><i><a  href="CMP1202-electronics2.html">CMP1202-Electronics II</a></i></b></li>
                                     <li class="course_units"><b><i><a  href="CMP1203-Computer-architecure&organisation.html">CMP1203-Computer Architecture & Organization</a></i></b></li>
                                     <li class="course_units"><b><i><a  href="ELE1202-electricity&magnetism.html">ELE1202-Electricity & Magnetism </a></i></b></li>
                                  {% endblock %}
                                    </ul>
                                </li>
                                </ul>
                              </li>
                              {% endblock dept_8_course_1_year_1 %}

                              {% block dept_8_course_1_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                        <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                  <ul>
                                    {% block dept_8_course_1_courseunit_list_3 %}
                                    <li class="course_units"><b><i><a  href="#">EMT2101-Engineering Math III</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="software-engineering.html">CMP2101-Software Engineering</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="CMP2102-electric _circuits_and_signals.html">CMP2102-Electric Circuits and Signals</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="CMP2103-OOP.html">CMP2103-Object Oriented Programming</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="socialogy-for-technology.html">TEC2101-Sociology For Technology</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                            </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                  {% block dept_8_course_1_courseunit_list_4 %}
                                   <li class="course_units"><b><i><a  href="#">CMP2201-Discrete Mathematics and Random Processes</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2202-Analysis and Design Of Algorithms</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2203-Digital Logic</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2204-Operating Systems Technologies</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2205-Computer Networks</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                              </li>
                        </ul>
                              </li>
                              {% endblock dept_8_course_1_year_2 %}

                              {% block dept_8_course_1_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                  {% block dept_8_course_1_courseunit_list_5 %}
                                  <li class="course_units"><b><i><a href="#">CMP3101-Database Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3104-Computer Based Medical Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE3101-Electro Magnetic Fields</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE3102-Applied Analouge Electronics</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">EMT3105-Engineering Mathematics V</a></i></b></li>
                                  {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_8_course_1_courseunit_list_6 %}
                                  <li class="course_units"><b><i><a href="#">CMP3201-Embedded Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3202-Human Computer Interaction</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3203-Computer Systems Maintenance</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3204-Distributed Information Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3205-Intelligent Systems </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3206-Saftey Critical System </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3207-Sustainable Energy Systems </a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_8_course_1_year_3 %}
                              {% block dept_8_course_1_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_8_course_1_courseunit_list_7 %}
                                  <li class="course_units"><b><i><a href="#">CMP4101-Digital Signal Processing</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4102-Instrumention and Control Engineering</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems and Network Security</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and Video Processing</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">TEC4101-Research Methods </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">TEC4102-Principles of Management </a></i></b></li>
                                {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_8_course_1_courseunit_list_8 %}
                                  <li class="course_units"><b><i><a href="#">CMP4201-Research Project</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4204-Wireless Technologies</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4205-Audio and Speech Signal Processing</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE4201-Project </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">TEC4201-Entrepreneurship </a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_8_course_1_year_4 %}
                            </ul>
                     </li>
                  {% endblock %}
                  {% block dept_8_course_list_2 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_8_course2-checkbox" autocomplete="off" >
                      <label for="dept_8_course2-checkbox" class="course_label" >
                        <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_8_course2" aria-expanded="false"><b>{% block dept_8_course2_name %} Bachelor of Arts in  Industrial Arts & Applied Design{% endblock %}</b></h4>
                        </label>    
                        <ul class="collapse"  id="dept_8_course2">
                              {% block dept_8_course_2_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                 <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_8_course_2_courseunit_list_1 %}
                                  <li class="course_units"><b><i><a href="EMT1101.html">EMT1101-Engineering Mathematics I</a></i></b></li>
                                  <li class="course_units"><b><i><a href="ELE1102-Physical Electronics.html">ELE1104-Physical Electronics</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE1105-Circuit Theory </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP1103-Information & Communication Technology</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE1112-Introduction To Electrical Engineering and Society </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">UNI1001-Communication Skills </a></i></b></li>
                                {% endblock %}
                                </ul>
                              </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_8_course_2_courseunit_list_2 %}
                                 <li class="course_units"><b><i><a href="#">EMT1201-Engineering Mathematics II</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE1201-Introduction To Digital Electronics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="ELE1204-Statics & Dynamics.html">ELE1204-Statics & Dynamics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE1205-Electrical Materials </a></i></b></li>
                                 <li class="course_units"><b><i><a href="socialogy-for-technology.html">TEC1202-Introduction To Sociology </a></i></b></li>
                                {% endblock %}
                              </ul>
                            </li>
                            </ul>
                              </li>
                              {% endblock dept_8_course_2_year_1 %}

                              {% block dept_8_course_2_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                    <ul>
                        <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                              <ul>
                              {% block dept_8_course_2_courseunit_list_3 %}
                                <li class="course_units"><b><i><a href="#">EMT2101-Engineering Mathematics III</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CMP2103-Object Oriented Programming</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2102-Electronic Circuits</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2111-Network Theory</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2112-Electromagnetics</a></i></b></li>
                             {% endblock %}
                              </ul>
                        </li>
                          <li>
                            <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_8_course_2_courseunit_list_4 %}
                               <li class="course_units"><b><i><a href="#">EMT2201-Engineering Mathematics IV</a></i></b></li>


                               <!--<li><b><i><a style="color:blue;" href = "programming.html">ELE2201-Power Systems Theory</a></i></b></li>
                               <li><b><i><a style="color:blue;" href="#">ELE2203-Network Theory I</a></i></b></li>
                               <li><b><i><a style="color:blue;" href="#">ELE2204-Economics For Elecrical Engineers</a></i></b></li>-->
                               <li class="course_units"><b><i><a href="#">ELE2211-Electromagnetic Fields</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE2212-Electrical Energy Systems</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE2213-Instrumentation</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">TEC2202-Technology,Ethics & Human Rights</a></i></b></li>
                                {% endblock %}
                              </ul>
                          </li>
                    </ul>
                              </li>
                              {% endblock dept_8_course_2_year_2 %}

                              {% block dept_8_course_2_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_8_course_2_courseunit_list_5 %}
                              <li class="course_units"><b><i><a href="#">COE3100-Entrepreneurship</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3102-Applied Analogue Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3103-Applied Digital Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3112-Radio Wave Propagation & Antennas</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3113-Power Systems Theory</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3114-Electrical Machines & Drives I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3111-Communication Theory</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">LAW1104-Law of Contracts </a></i></b></li>
                              {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_8_course_2_courseunit_list_6 %}
                              <li class="course_units"><b><i><a href="#">ELE3211-Industrial Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3202-Control Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3203-Power Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3204-Communication Engineering I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3205-Electrical Machines & Drives II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3215-Power Systems Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">EMT3201-Engineering Mathematics VI</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3214-Computer Communication Networks</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3216-Energy Conversion And Generation</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3212-Digital Communications Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3217-Systems Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">Mobile Communication Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">COE1102-Fundamental Acccounts Principles</a></i></b></li>
                            {% endblock %}

                            </ul>
                     </li>
                  </ul>
                              </li>
                              {% endblock dept_8_course_2_year_3 %}

                              {% block dept_8_course_2_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_8_course_2_courseunit_list_7 %}
                              <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                              <li class="course_units"><b><i><a href="#"></a></i></b></li>
                            {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_8_course_2_courseunit_list_8 %}
                            <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                            <li class="course_units"><b><i><a href="#"></a></i></b></li>
                          {% endblock %}
                          </ul>
            </li>
            </ul>
                              </li>
                              {% endblock dept_8_course_2_year_4 %}
                              
                              {% block dept_8_course_2_year_5 %}
                              <li class="std-yr"><b><i>YEAR FIVE</i></b>
                                <ul>
                                  <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                          {% block dept_8_course_2_courseunit_list_9 %}
                                          <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                  </li>
                                  <li>
                                      <b class="sem"><i>SEMESTER TWO</i></b>
                                        <ul>
                                          {% block dept_8_course_2_courseunit_list_10 %}
                                        <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                      {% endblock %}
                                      </ul>
                        </li>
                        </ul>
                                          </li>
                              
                              {% endblock %}
                           </ul>
                     </li> 
                  {% endblock %}       
                  
                  {% block dept_8_course_list_3 %}
                      <li>
                        <input type="checkbox" class="course-checkbox" id="dept_8_course3-checkbox" autocomplete="off" >
                        <label for="dept_8_course3-checkbox" class="course_label" >
                        <h4 class ="course_name" data-toggle="collapse" data-target="#dept_8_course3" aria-expanded="false"><b>{% block dept_8_course3_name %} Bachelor of Science In Telecommunication Engineering {% endblock %}</b></h4>
                        </label>   
                        <ul class="collapse" id="dept_8_course3">
                            {% block dept_8_course_3_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_8_course_3_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}  
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_8_course_3_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                              {% endblock %}
                              {% block dept_8_course_3_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_8_course_3_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_8_course_3_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                  </li>
                            </ul>
                              </li>
                              {% endblock %}
                              {% block dept_8_course_3_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_8_course_3_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_8_course_3_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                              {% block dept_8_course_3_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_8_course_3_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_8_course_3_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock  %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                           </ul>
                    </li>
                  {% endblock %}
                  {% block dept_8_course_list_4 %}
                    <li>
                      <input type="checkbox" class="course-checkbox" id="dept_8_course4-checkbox" autocomplete="off" >
                      <label for="dept_8_course4-checkbox" class="course_label" >
                          <h4 class ="course_name" data-toggle="collapse" data-target="#dept_8_course4" aria-expanded="false"><b>{% block dept_8_course4_name %} Bachelor Of Science In Biomedical Engineering{% endblock %}</b></h4>
                        </label>  
                        <ul class="collapse" id="dept_8_course4">
                            {% block dept_8_course_4_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_8_course_4_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                     {% block dept_8_course_4_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}  
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                            {% endblock %}
                            {% block dept_8_course_4_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_8_course_4_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_8_course_4_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %} 
                                      </ul>
                                  </li>
                            </ul>
                              </li>  
                            {% endblock %}
                            {% block dept_8_course_4_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_8_course_4_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                  {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_8_course_4_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                   {% endblock %} 
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                            {% block dept_8_course_4_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_8_course_4_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_8_course_4_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                        </ul>
                    </li>
                {% endblock %}
                </ul>
       </div>
  {% endblock %}

  {% block sch_3_dept_3 %}
  {% block dept_10 %}
      <strong><h3 class="dept_name">{% block dept9_name %} Department of Visual Communication, Design & Multimedia{% endblock %}</h3></strong>
     {% endblock %}
      <div class="dept-courses">
                <ul class="courses">
                  {% block dept_9_course_list_1 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_9_course1-checkbox" autocomplete="off" >
                      <label for="dept_9_course1-checkbox" class="course_label" >
                        <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_9_course1" aria-expanded="false"><b>{% block dept_9_course1_name %} Bachelor of Visual Communication, Design & Multimedia {% endblock %}</b></h4>
                        </label>    
                        <ul class="collapse"  id="dept_9_course1">
                              {% block dept_9_course_1_year_1 %}                                                                                                                                           
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                    <ul>
                                      <li>
                                    <strong><b class="sem"><i>SEMESTER ONE</i></b></strong>
                                    <ul>
                                      {% block dept_9_course_1_courseunit_list_1 %}
                                      <li class="course_units"><b><i><a  href="EMT1101.html">EMT1101-Engineering Math I</a></i></b></li>
                                      <li class="course_units"><b><i><a href="CMP1101-electronics1.html"> CMP1101-Electronics I</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="ethics.html">CMP1102-Computer Engineering Ethics</a></i></b></li>
                                      <li class="course_units"><b><i><a  href="CMP1103-ict.html">CMP1103-Information & Communication Technology</a></i></b></li>
                                      <li class="course_units"><b><i><a href="communication skills.html">UNI1001-Communication Skills </a></i></b></li>
                                      {% endblock %}
                                    </ul>
                                  </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                    {% block dept_9_course_1_courseunit_list_2 %}
                                     <li class="course_units"><b><i><a  href="EMT1201.html">EMT1201-Engineering Math II</a></i></b></li>
                                     <li class="course_units"><b><i><a  href = "computer programming fundamentals-muk.html">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                                     <li class="course_units"><b><i><a  href="CMP1202-electronics2.html">CMP1202-Electronics II</a></i></b></li>
                                     <li class="course_units"><b><i><a  href="CMP1203-Computer-architecure&organisation.html">CMP1203-Computer Architecture & Organization</a></i></b></li>
                                     <li class="course_units"><b><i><a  href="ELE1202-electricity&magnetism.html">ELE1202-Electricity & Magnetism </a></i></b></li>
                                  {% endblock %}
                                    </ul>
                                </li>
                                </ul>
                              </li>
                              {% endblock dept_9_course_1_year_1 %}

                              {% block dept_9_course_1_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                        <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                  <ul>
                                    {% block dept_9_course_1_courseunit_list_3 %}
                                    <li class="course_units"><b><i><a  href="#">EMT2101-Engineering Math III</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="software-engineering.html">CMP2101-Software Engineering</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="CMP2102-electric _circuits_and_signals.html">CMP2102-Electric Circuits and Signals</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="CMP2103-OOP.html">CMP2103-Object Oriented Programming</a></i></b></li>
                                    <li class="course_units"><b><i><a  href="socialogy-for-technology.html">TEC2101-Sociology For Technology</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                            </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                  <ul>
                                  {% block dept_9_course_1_courseunit_list_4 %}
                                   <li class="course_units"><b><i><a  href="#">CMP2201-Discrete Mathematics and Random Processes</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2202-Analysis and Design Of Algorithms</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2203-Digital Logic</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2204-Operating Systems Technologies</a></i></b></li>
                                   <li class="course_units"><b><i><a  href="#">CMP2205-Computer Networks</a></i></b></li>
                                  {% endblock %}
                                  </ul>
                              </li>
                        </ul>
                              </li>
                              {% endblock dept_9_course_1_year_2 %}

                              {% block dept_9_course_1_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                  {% block dept_9_course_1_courseunit_list_5 %}
                                  <li class="course_units"><b><i><a href="#">CMP3101-Database Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3104-Computer Based Medical Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE3101-Electro Magnetic Fields</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE3102-Applied Analouge Electronics</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">EMT3105-Engineering Mathematics V</a></i></b></li>
                                  {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_9_course_1_courseunit_list_6 %}
                                  <li class="course_units"><b><i><a href="#">CMP3201-Embedded Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3202-Human Computer Interaction</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3203-Computer Systems Maintenance</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3204-Distributed Information Systems</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3205-Intelligent Systems </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3206-Saftey Critical System </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP3207-Sustainable Energy Systems </a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_9_course_1_year_3 %}
                              {% block dept_9_course_1_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                        <ul>
                          <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_9_course_1_courseunit_list_7 %}
                                  <li class="course_units"><b><i><a href="#">CMP4101-Digital Signal Processing</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4102-Instrumention and Control Engineering</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems and Network Security</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and Video Processing</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">TEC4101-Research Methods </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">TEC4102-Principles of Management </a></i></b></li>
                                {% endblock %}
                                </ul>
                          </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                                <ul>
                                {% block dept_9_course_1_courseunit_list_8 %}
                                  <li class="course_units"><b><i><a href="#">CMP4201-Research Project</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4204-Wireless Technologies</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP4205-Audio and Speech Signal Processing</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE4201-Project </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">TEC4201-Entrepreneurship </a></i></b></li>
                                {% endblock %}
                                </ul>
                         </li>
                      </ul>
                              </li>
                              {% endblock dept_9_course_1_year_4 %}
                            </ul>
                     </li>
                  {% endblock %}
                  {% block dept_9_course_list_2 %}
                     <li>
                      <input type="checkbox" class="course-checkbox" id="dept_9_course2-checkbox" autocomplete="off" >
                      <label for="dept_9_course2-checkbox" class="course_label" >
                        <h4 class ="course_name"  data-toggle="collapse" data-target="#dept_9_course2" aria-expanded="false"><b>{% block dept_9_course2_name %} Bachelor of science in Elecrical Engineering {% endblock %}</b></h4>
                        </label>    
                        <ul class="collapse"  id="dept_9_course2">
                              {% block dept_9_course_2_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                 <ul>
                            <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                <ul>
                                {% block dept_9_course_2_courseunit_list_1 %}
                                  <li class="course_units"><b><i><a href="EMT1101.html">EMT1101-Engineering Mathematics I</a></i></b></li>
                                  <li class="course_units"><b><i><a href="ELE1102-Physical Electronics.html">ELE1104-Physical Electronics</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE1105-Circuit Theory </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">CMP1103-Information & Communication Technology</a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">ELE1112-Introduction To Electrical Engineering and Society </a></i></b></li>
                                  <li class="course_units"><b><i><a href="#">UNI1001-Communication Skills </a></i></b></li>
                                {% endblock %}
                                </ul>
                              </li>
                          <li>
                              <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_9_course_2_courseunit_list_2 %}
                                 <li class="course_units"><b><i><a href="#">EMT1201-Engineering Mathematics II</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">CMP1201-Computer Programming Fundamentals</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE1201-Introduction To Digital Electronics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="ELE1204-Statics & Dynamics.html">ELE1204-Statics & Dynamics</a></i></b></li>
                                 <li class="course_units"><b><i><a href="#">ELE1205-Electrical Materials </a></i></b></li>
                                 <li class="course_units"><b><i><a href="socialogy-for-technology.html">TEC1202-Introduction To Sociology </a></i></b></li>
                                {% endblock %}
                              </ul>
                            </li>
                            </ul>
                              </li>
                              {% endblock dept_9_course_2_year_1 %}

                              {% block dept_9_course_2_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                    <ul>
                        <li>
                            <b class="sem"><i>SEMESTER ONE</i></b>
                              <ul>
                              {% block dept_9_course_2_courseunit_list_3 %}
                                <li class="course_units"><b><i><a href="#">EMT2101-Engineering Mathematics III</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">CMP2103-Object Oriented Programming</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2102-Electronic Circuits</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2111-Network Theory</a></i></b></li>
                                <li class="course_units"><b><i><a href="#">ELE2112-Electromagnetics</a></i></b></li>
                             {% endblock %}
                              </ul>
                        </li>
                          <li>
                            <b class="sem"><i>SEMESTER TWO</i></b>
                              <ul>
                                {% block dept_9_course_2_courseunit_list_4 %}
                               <li class="course_units"><b><i><a href="#">EMT2201-Engineering Mathematics IV</a></i></b></li>


                               <!--<li><b><i><a style="color:blue;" href = "programming.html">ELE2201-Power Systems Theory</a></i></b></li>
                               <li><b><i><a style="color:blue;" href="#">ELE2203-Network Theory I</a></i></b></li>
                               <li><b><i><a style="color:blue;" href="#">ELE2204-Economics For Elecrical Engineers</a></i></b></li>-->
                               <li class="course_units"><b><i><a href="#">ELE2211-Electromagnetic Fields</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE2212-Electrical Energy Systems</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">ELE2213-Instrumentation</a></i></b></li>
                               <li class="course_units"><b><i><a href="#">TEC2202-Technology,Ethics & Human Rights</a></i></b></li>
                                {% endblock %}
                              </ul>
                          </li>
                    </ul>
                              </li>
                              {% endblock dept_9_course_2_year_2 %}

                              {% block dept_9_course_2_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_9_course_2_courseunit_list_5 %}
                              <li class="course_units"><b><i><a href="#">COE3100-Entrepreneurship</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3102-Applied Analogue Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3103-Applied Digital Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3112-Radio Wave Propagation & Antennas</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3113-Power Systems Theory</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3114-Electrical Machines & Drives I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3111-Communication Theory</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">LAW1104-Law of Contracts </a></i></b></li>
                              {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_9_course_2_courseunit_list_6 %}
                              <li class="course_units"><b><i><a href="#">ELE3211-Industrial Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3202-Control Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3203-Power Electronics</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3204-Communication Engineering I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3205-Electrical Machines & Drives II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3215-Power Systems Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">EMT3201-Engineering Mathematics VI</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3214-Computer Communication Networks</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE3216-Energy Conversion And Generation</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3212-Digital Communications Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL3217-Systems Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">Mobile Communication Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">COE1102-Fundamental Acccounts Principles</a></i></b></li>
                            {% endblock %}

                            </ul>
                     </li>
                  </ul>
                              </li>
                              {% endblock dept_9_course_2_year_3 %}

                              {% block dept_9_course_2_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                    <ul>
                      <li>
                        <b class="sem"><i>SEMESTER ONE</i></b>
                            <ul>
                              {% block dept_9_course_2_courseunit_list_7 %}
                              <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                              <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                              <li class="course_units"><b><i><a href="#"></a></i></b></li>
                            {% endblock %}
                            </ul>
                      </li>
                      <li>
                          <b class="sem"><i>SEMESTER TWO</i></b>
                            <ul>
                              {% block dept_9_course_2_courseunit_list_8 %}
                            <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                            <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                            <li class="course_units"><b><i><a href="#"></a></i></b></li>
                          {% endblock %}
                          </ul>
            </li>
            </ul>
                              </li>
                              {% endblock dept_9_course_2_year_4 %}
                              
                              {% block dept_9_course_2_year_5 %}
                              <li class="std-yr"><b><i>YEAR FIVE</i></b>
                                <ul>
                                  <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                          {% block dept_9_course_2_courseunit_list_9 %}
                                          <li class="course_units"><b><i><a href="#">CMP4102-Instrumentation and Control Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4103-Computer Systems And Network Security</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">CMP4104-Digital Image and video Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4100-Electrical Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4101-Communication Engineering II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4102-Propagation</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4103-Telecommunication Systems I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4104-Microprocessors</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4105-Power Systems Engineering I</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4106-Network Theory II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4115-Power Systems Protection</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4108-Business Management For Electrical Engineers II</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4112-Microprocessor Based Systems</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">ELE4116-Electrical Installation Design</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEC4101-Reseach Methods</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4113-Optical Communication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4114-Television and Video Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#">TEL4111-Digital Signal Processing</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                  </li>
                                  <li>
                                      <b class="sem"><i>SEMESTER TWO</i></b>
                                        <ul>
                                          {% block dept_9_course_2_courseunit_list_10 %}
                                        <li class="course_units"><b><i><a href="#">CMP4202-VLSI Systems Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4203-Computer Systems Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4204-Radio Frequency Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4205-Antennas</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4206-Intergrated Circuits Design And Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4207-Control engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4208_Power Systems Engineering II</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4209-High Voltage Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4214-Power Economics and Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4210-Electrical Installation Design</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4216-Advanced Topicsm In Electronic Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">ELE4217-Advanced Topics In power Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4211-Business Management</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#"></a></i></b></li>
                                      {% endblock %}
                                      </ul>
                        </li>
                        </ul>
                                          </li>
                              
                              {% endblock %}
                           </ul>
                     </li> 
                  {% endblock %}       
                  
                  {% block dept_9_course_list_3 %}
                      <li>
                        <input type="checkbox" class="course-checkbox" id="dept_9_course3-checkbox" autocomplete="off" >
                      <label for="dept_9_course3-checkbox" class="course_label" >
                        <h4 class ="course_name" data-toggle="collapse" data-target="#dept_9_course3" aria-expanded="false"><b>{% block dept_9_course3_name %} Bachelor of Science In Telecommunication Engineering {% endblock %}</b></h4>
                        </label>   
                        <ul class="collapse" id="dept_9_course3">
                            {% block dept_9_course_3_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_9_course_3_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}  
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_9_course_3_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                              {% endblock %}
                              {% block dept_9_course_3_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_9_course_3_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_9_course_3_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                      {% endblock %}
                                      </ul>
                                  </li>
                            </ul>
                              </li>
                              {% endblock %}
                              {% block dept_9_course_3_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_9_course_3_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_9_course_3_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                              {% block dept_9_course_3_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_9_course_3_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_9_course_3_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock  %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                              {% endblock %}
                           </ul>
                    </li>
                  {% endblock %}
                  {% block dept_9_course_list_4 %}
                    <li>
                      <input type="checkbox" class="course-checkbox" id="dept_9_course4-checkbox" autocomplete="off" >
                      <label for="dept_9_course4-checkbox" class="course_label" >
                          <h4 class ="course_name" data-toggle="collapse" data-target="#dept_9_course4" aria-expanded="false"><b>{% block dept_9_course4_name %} Bachelor Of Science In Biomedical Engineering{% endblock %}</b></h4>
                        </label>  
                        <ul class="collapse" id="dept_9_course4">
                            {% block dept_9_course_4_year_1 %}
                              <li class="std-yr"><b><i>YEAR ONE</i></b>
                                  <ul>
                                    <li>
                                        <b class="sem"><i>SEMESTER ONE</i></b>
                                        <ul>
                                        {% block dept_9_course_4_courseunit_list_1 %}
                                          <li class="course_units"><b><i><a href="#">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                          <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                        {% endblock %}
                                        </ul>
                                      </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                     {% block dept_9_course_4_courseunit_list_2 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}  
                                      </ul>
                                    </li>
                                    </ul>
                              </li>
                            {% endblock %}
                            {% block dept_9_course_4_year_2 %}
                              <li class="std-yr"><b><i>YEAR TWO</i></b>
                            <ul>
                                <li>
                                    <b class="sem"><i>SEMESTER ONE</i></b>
                                      <ul>
                                      {% block dept_9_course_4_courseunit_list_3 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %}
                                      </ul>
                                </li>
                                  <li>
                                    <b class="sem"><i>SEMESTER TWO</i></b>
                                      <ul>
                                      {% block dept_9_course_4_courseunit_list_4 %}
                                        <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                        <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                     {% endblock %} 
                                      </ul>
                                  </li>
                            </ul>
                              </li>  
                            {% endblock %}
                            {% block dept_9_course_4_year_3 %}
                              <li class="std-yr"><b><i>YEAR THREE</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_9_course_4_courseunit_list_5 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                  {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_9_course_4_courseunit_list_6 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                   {% endblock %} 
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                            {% block dept_9_course_4_year_4 %}
                              <li class="std-yr"><b><i>YEAR FOUR</i></b>
                            <ul>
                              <li>
                                <b class="sem"><i>SEMESTER ONE</i></b>
                                    <ul>
                                      {% block dept_9_course_4_courseunit_list_7 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                              </li>
                              <li>
                                  <b class="sem"><i>SEMESTER TWO</i></b>
                                    <ul>
                                      {% block dept_9_course_4_courseunit_list_8 %}
                                      <li class="course_units"><b><i><a href="#0">TEL4200-Telecommunication Engineering Project</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4212-Satellite Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4213-Radio Frequency & Microwave Engineering</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">TEL4215-Broadband And Advanced Communications</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">ELE4211-Vlsic Design & Fabrication</a></i></b></li>
                                      <li class="course_units"><b><i><a href="#0">COE1104-Business Management</a></i></b></li>
                                    {% endblock %}
                                    </ul>
                             </li>
                          </ul>
                              </li>
                            {% endblock %}
                        </ul>
                    </li>
                {% endblock %}
                </ul>
      </div>
  {% endblock %}     
{% endblock %}

      </div>
 </div>
    {% endblock %}
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" id="university_links" >
      <div class="col-12"><h4>MUST CHECKOUTS</h4></div>
   <div class="row side-menu">
   <div class="side-menu-link-item menu-item-01 col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" >
   {% block col_tt_link %}<a href="http://localhost/Home/error"target="_blank" >{% endblock %} Time Tables</a>
   </div>
   <div class="side-menu-link-item menu-item-02 col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" >
   {% block col_noticebrd_link %}<a href="http://localhost/Home/error" target="_blank">{% endblock %}Notice Board</a>
   </div>
   <div class="side-menu-link-item menu-item-03  col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" >
   {% block col_blog_link %}<a href="http://localhost/Home/error" target="_blank">{% endblock %}Blog</a>
   </div>
   </div>

  <div class="website-guide">
    <strong><h4 class="title2">Quick Guide | Gpa Elevator</h4></strong>
  <div id="guidelines">
          <p>{% block paraguide %}Just click on your course, then select the year which you want to visit and then select that particular course unit to get access to all papers and lecture notes{% endblock %}<br/>
                  OR<br/>
            Search for that Particular course units using course-unit name or course code to get you their directly

            </p>  
  </div>
   </div>
<div class="University-links">
  {% block quick_link_img %}<img id="university_links-img" src="http://localhost/img/muk-logo.png" alt="Makerere University Logo">{% endblock %} <span><strong><h3 class="title2">Quick Links</h3></strong></span>
   <div class="quick-links">
              <ul class="link">
          {% block quick_links %} 
           <li class="link-item" id="link-item-first-child"><a href="http://localhost/Home/index">Gpa Elevator Home Page</a></li>
           <li class="link-item"><a href="https://www.mak.ac.ug/" target="_blank">University Website</a></li>
           <li class="link-item"><a href="https://student.mak.ac.ug/" target="_blank">Students Portal</a></li>
           <li class="link-item"><a href="https://www.mak.ac.ug/about-makerere/contact-information" target="_blank">University Location</a></li>
           <li class="link-item"><a href="https://muele.mak.ac.ug/" target="_blank">e-Learning</a></li>
           <li class="link-item"><a href="https://admissions.mak.ac.ug/" target="_blank">Admissions Portal</a></li>
           <li class="link-item"><a href="https://www.mak.ac.ug/admissions/fees-payment-and-funding" target="_blank">Scholarship</a></li>
          {% endblock %}  
             </ul>
   </div>
</div>
    </div>
  </div>
</div>

{% block Online_notice_board %} 
    <div class="noticeboard-title col-noticeboard-welcome-txt Noticebox">
    <h3>CEDAT Online  Notice Board </h3>
    </div>
    <div class="text-right user_login">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>

  <div class="tab">
    <div class="row">
    <button class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 tablinks" id="defaultOpen" onclick="openCity(event, 'main')">MAIN</button>
    <button class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 tablinks" onclick="openCity(event, 'engineering')">ENGINEERING</button>
    <button class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 tablinks" onclick="openCity(event, 'environment')">BUILT ENVIRONMENT</button>
    <button class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 tablinks" onclick="openCity(event, 'Art')">INDUSTRIAL ART</button>
  </div>
</div>
  
  <div id="main" class="tabcontent active ">
    <h3>CEDAT MAIN NOTICE BOARD</h3>
  <div class="row scrollable">
    <div  class="col-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore vitae hic, reprehenderit amet facilis harum exercitationem eum accusantium aliquam. Mollitia vitae fuga repellendus aut. Fuga quis voluptatum explicabo ea libero.</div>
   <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
    <div class="noticeimgbox"> <a href="../img/trans-muk.png"><img src="../img/trans-muk.png" id="img" class="notice_img " alt=""></a> </div>
   </div>
   <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
    <div class="noticeimgbox"> <img src="../img/trans-kyu.jpg" class="notice_img" alt=""> </div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
   <div class="noticeimgbox">  <img src="../img/trans-muk.png" class="notice_img" alt=""> 

    </div>
  </div>
  </div>
  <ul class="nav navbar navbar-right">
    <li><a href=""> Previous</a></li>
    <li><a href="">Next</a></li>
  </ul>
  </div>
  
  <div id="engineering" class="tabcontent">
    <h3>SCHOOL OF ENGINEERING</h3>
    <div class="row scrollable">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
       <div class="noticeimgbox"> 
         <img src="../img/trans-muk.png" id="img" class="notice_img " alt=""> 
         <div class="row notice_content"> 
           <div class="col-12"> Date Posted: 12/03/2019 </div>
           <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"> <a href="#" class="btn btn-primary">Print</a></div>
           <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xl-5"> <a href="#" class="btn btn-primary"><i class="fa fa-download"></i>&nbsp;Download</a></div>
           <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"> <a href="#" class="btn btn-primary"><i class="fa fa-share"></i>Share</a></div>

          </div>
      </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
       <div class="noticeimgbox"> <img src="../img/trans-kyu.jpg" class="notice_img" alt=""> </div>
     </div>
     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
       <div class="noticeimgbox"> <img src="../img/trans-muk.png" class="notice_img" alt=""> </div>
     </div>
     </div>
     <ul class="nav navbar navbar-right">
       <li><a href=""> Previous</a></li>
       <li><a href="">Next</a></li>
     </ul>
  </div>
  
  <div id="environment" class="tabcontent">
    <h3>SCHOOL OF BUILT ENVIRONMENT</h3>

  </div>
  <div id="Art" class="tabcontent">
    <h3>MARGARET TROWELL SCHOOL OF INDUSTRIAL AND FINE ART</h3>
    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sed dolorem architecto modi omnis perferendis vel voluptate illo qui, quis aspernatur hic ipsam natus reprehenderit ullam at voluptatem repellat nihil velit recusandae molestias? Ipsum quae ducimus quisquam molestiae fugiat voluptates, qui commodi incidunt earum iste, quidem voluptatem? Pariatur eveniet possimus deleniti cupiditate ipsa, ex aliquam laboriosam architecto commodi. Eos, dicta inventore. Est deserunt voluptates unde voluptatibus officiis quam cupiditate fugiat incidunt. Maiores perferendis distinctio fugiat alias. Veritatis inventore est magnam repellat velit odio, iure beatae exercitationem possimus, quia porro, dignissimos vel pariatur unde veniam. Facilis, perspiciatis tenetur? Quos, eaque voluptas.</div>  
  </div>

{% endblock %}
{% endblock %}

