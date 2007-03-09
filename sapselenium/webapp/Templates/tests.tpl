<!--
Copyright 2004 ThoughtWorks, Inc

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
-->
<html>
<head>
<meta content="text/html; charset=ISO-8859-1"
http-equiv="content-type">
<title>Test Suite</title>
<link rel="stylesheet" type="text/css" href="../core/selenium.css" />
<style type="text/css">
{literal}
#suiteTable {
	border: 1px solid black;
	border-collapse: collapse;
}
{/literal}
</style>
<script language="JavaScript" type="text/javascript" src="../core/scripts/selenium-browserdetect.js"></script>
{literal}
<script language="JavaScript" type="text/javascript">
    function filterTestsForBrowser() {
        var suiteTable = document.getElementById("suiteTable");
        var skippedTests = document.getElementById("skippedTests");

        for(rowNum = suiteTable.rows.length - 1; rowNum >= 0; rowNum--)
        {
            var row = suiteTable.rows[rowNum];
            var filterString = row.getAttribute("unless");
            if (filterString && eval(filterString))
            {
              var cellHTML = row.cells[0].innerHTML;
              suiteTable.deleteRow(rowNum);

              var newRow = skippedTests.insertRow(1);
              var newCell = newRow.insertCell(0)
              newCell.innerHTML = cellHTML;
            }
        }
    }
</script>
{/literal}
</head>

<body onload="filterTestsForBrowser()">

    <table id="suiteTable"    cellpadding="1"
           cellspacing="1"
           border="1"
           class="selenium" width="100%">
        <tbody>
		<tr><td><b>Test Suite</b></td></tr>
{foreach from=$classes key=k item=v name=classes}
<tr><td bgcolor="{cycle values="lightgrey, white"}">{$smarty.foreach.classes.iteration})&nbsp;<a href="{saurl page=methods test=$v.file_name}" target="testFrame">{$v.name}</a></td></tr>
{foreachelse}
No test was found.
{/foreach}
        </tbody>
    </table>
</body>
</html>

