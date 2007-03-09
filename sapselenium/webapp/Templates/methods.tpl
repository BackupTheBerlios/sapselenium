<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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
<!-- FIXME:DAZ Revert to 405 - these test must fail in order to verify that our "expectError" commands actually check the error value.
     This should be made clearer in the test name and index.html -->
<html>
<head>
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
	<title>Test Click</title>
	<style type="text/css">
	{literal}
	#testsTable {
		border: 1px solid black;
		border-collapse: collapse;
	}
	{/literal}
	</style>
</head>
<body>
<table id="testsTable" cellpadding="1" cellspacing="1" border="1" width="100%">
  <tbody>
    <tr>
      <td rowspan="1" colspan="3">{$className}<br>
      </td>
    </tr>
		{foreach from=$calls item=call}
		<tr style="cursor: pointer;">
			<td>{$call.method}</td>
			<td>{if $call.params.0} {$call.params.0} {else}&nbsp;{/if}</td>
			<td>{if $call.params.1} {$call.params.1} {else}&nbsp;{/if}</td>
		</tr>
		{foreachelse}
		<tr><td colspan="3">No test defined</td>
		{/foreach}
  </tbody>
</table>
</body>
</html>
