<!-- FINAL COPY!! -->


<!-- session_save_path('/home/a/akritis9/public_html');
session_start() -->

<html>
    <head>
        <title>CPSC 304 Project</title>
    </head>

    <body>
        <h2>Insert a New User</h2>
        <form method="POST" action="interviewApp.php"> <!--refresh page when submitted-->
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            ID: <input type="text" name="insId"> <br /><br />
            Name: <input type="text" name="insName"> <br /><br />
            Age: <input type="text" name="insAge"> <br /><br />
            Experience: <input type="text" name="insExp"> <br /><br />
            Education: <input type="text" name="insEdu"> <br /><br />
            About: <input type="text" name="insAbout"> <br /><br />

            <input type="submit" value="Insert" name="insertSubmit"></p>
        </form>

        <hr />

        <h2>View a list of interview questions(Selection Query)</h2>
        <form method="GET" action="interviewApp.php"> <!--refresh page when submitted-->
        <input type="hidden" id="codingQRequest" name="codingQRequest">
            <label for="selectionTable">Choose Question Type:</label>
            <select id="selectionTable" name="selectionTable">
                <option value="coding">coding</option>
                <option value="behavioural">behavioural</option>
            </select>
            <br>
            <br>
            <label for="selectionAttr">Select Attributes for viewing:</label>
            <select id="selectionAttr" name="selectionAttr">
                <option value="qTitle">Question Title</option>
                <option value="qType">Question Type (only select for coding)</option>
                <option value="content">Detailed Content</option>
            </select>
            <br>
            <br>
            <label for="selectionFilter">Choose a filter:</label>
            <select id="selectionFilter" name="selectionFilter">
                <option value="easy">easy (only select for coding)</option>
                <option value="medium">medium (only select for coding)</option>
                <option value="hard">hard (only select for coding)</option>
                <option value="1">Admin Approved Questions</option>
                <option value="0">Unapproved Questions</option>
            </select>

            <input type="submit" name="getCodingQuestions"></p>
            
        </form>

        <hr />

        <h2>View a list of coding questions based on Company (Join Query)</h2>
        <form method="GET" action="interviewApp.php"> <!--refresh page when submitted-->
        <input type="hidden" id="companyQRequest" name="companyQRequest">
            <label for="company">Choose a company:</label>
            <select id="company" name="company">
                <option value="Google">Google</option>
                <option value="Amazon">Amazon</option>
                <option value="Microsoft">Microsoft</option>
                <option value="Tesla">Tesla</option>
                <option value="Best Buy">Best Buy</option>
            </select>

            <input type="submit" name="getCompanyQuestions"></p>
            
        </form>

        <hr />

        <h2>View a selection of User attributes (Projection Query)</h2>
        <form method="GET" action="interviewApp.php"> <!--refresh page when submitted-->
        <input type="hidden" id="projectionQueryRequest" name="projectionQueryRequest">
        <label for="userAttributes">Select User attributes:</label>
            <select id="firstAttribute" name="firstAttribute">
                <option value="username">Name</option>
                <option value="age">Age</option>
                <option value="experience">Experience</option>
                <option value="education">Education</option>
                <option value="about">About</option>
                <option value="userID">ID</option>
            </select>

            <select id="secondAttribute" name="secondAttribute">
                <option value="username">Name</option>
                <option value="age">Age</option>
                <option value="experience">Experience</option>
                <option value="education">Education</option>
                <option value="about">About</option>
                <option value="userID">ID</option>
            </select>

            <select id="thirdAttribute" name="thirdAttribute">
                <option value="username">Name</option>
                <option value="age">Age</option>
                <option value="experience">Experience</option>
                <option value="education">Education</option>
                <option value="about">About</option>
                <option value="userID">ID</option>
            </select>

            <input type="submit" name="getUserAttributes"></p>
            
        </form>

        <hr />

        <h2>Update User attributes</h2>

        <form method="POST" action="interviewApp.php"> <!--refresh page when submitted-->
            <input type="hidden" id="updateQueryRequest" name="updateQueryRequest">
            User ID: <input type="text" name="userID"> <br /><br />
            New Name: <input type="text" name="newName"> <br /><br />
            New Age: <input type="text" name="newAge"> <br /><br />
            New Experience: <input type="text" name="newExp"> <br /><br />
            New Education: <input type="text" name="newEdu"> <br /><br />
            New About: <input type="text" name="newAbout"> <br /><br />

            <input type="submit" value="Update" name="updateSubmit"></p>
        </form>

        <hr />

        <h2>View average salary for each Company (Aggregation with Group By)</h2>
        <form method="GET" action="interviewApp.php"> <!--refresh page when submitted-->
        <input type="hidden" id="avgSalaryRequest" name="avgSalaryRequest">
            <label for="company">Choose a company:</label>
            <select id="company" name="company">
                <option value="Google">Google</option>
                <option value="Amazon">Amazon</option>
                <option value="Microsoft">Microsoft</option>
                <option value="Tesla">Tesla</option>
                <option value="Best Buy">Best Buy</option>
            </select>

            <input type="submit" name="getAvgSalary"></p>
            
        </form>

        <hr />
        <h2>View average experience for each age with above average experience (Nested Aggregation with Group By)</h2>
        <form method="GET" action="interviewApp.php"> <!--refresh page when submitted-->
        <input type="hidden" id="avgExpRequest" name="avgExpRequest">
        <input type="submit" name="getAvgExp"></p>
        </form>
        <hr />

        <h2>View number of applications per company (Aggregation with Group By and Having)</h2>
        <form method="GET" action="interviewApp.php"> <!--refresh page when submitted-->
        <input type="hidden" id="numAppsRequest" name="numAppsRequest">
        Company Name: <input type="text" name="companyName"> <br /><br />
        <input type="submit" name="getNumApps"></p>
        </form>
        <hr />

        <h2>Display Users</h2>
        <form method="GET" action="interviewApp.php"> <!--refresh page when submitted-->
            <input type="hidden" id="countTupleRequest" name="countTupleRequest">
            <input type="submit" name="countTuples"></p>
        </form>
        <hr />

        <h2>Display Applications</h2>
        <form method="GET" action="interviewApp.php"> <!--refresh page when submitted-->
            <input type="hidden" id="viewApplicationsRequest" name="viewApplicationsRequest">
            <input type="submit" name="viewApplications"></p>
        </form>
        <hr />

        <h2>Display the Users who've applied to every job (Division)</h2>
        <form method="GET" action="interviewApp.php"> <!--refresh page when submitted-->
            <input type="hidden" id="appliedToAll" name="appliedToAll">
            <input type="submit" name="countAppliedToAll"></p>
        </form>
        <hr />

        <h2>Delete a User</h2>
        <form method="POST" action="interviewApp.php"> <!--refresh page when submitted-->
            <input type="hidden" id="deleteUserRequest" name="deleteUserRequest">
            UserID: <input type="text" name="userID"> <br /><br />

            <input type="submit" name="deleteSubmit"></p>
        </form>
        <hr />

        

        <h2>Results</h2>

        <?php
        define("USERNAME", "ora_pconner");
        define("PASSWORD", "a13781075");

		//this tells the system that it's no longer just parsing html; it's now parsing PHP

        $success = True; //keep track of errors so it redirects the page only if there are no errors
        $db_conn = NULL; // edit the login credentials in connectToDB()
        $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())

        function debugAlertMessage($message) {
            global $show_debug_alert_messages;

            if ($show_debug_alert_messages) {
                echo "<script type='text/javascript'>alert('" . $message . "');</script>";
            }
        }

        function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
            //echo "<br>running ".$cmdstr."<br>";
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr);
            //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                echo htmlentities($e['message']);
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                echo htmlentities($e['message']);
                $success = False;
            }

			return $statement;
		}

        function executeBoundSQL($cmdstr, $list) {
            /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
		In this case you don't need to create the statement several times. Bound variables cause a statement to only be
		parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection.
		See the sample code below for how this function is used */

			global $db_conn, $success;
			$statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = False;
            }

            foreach ($list as $tuple) {
                foreach ($tuple as $bind => $val) {
                    //echo $val;
                    //echo "<br>".$bind."<br>";
                    OCIBindByName($statement, $bind, $val);
                    unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
				}

                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                    $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                    echo htmlentities($e['message']);
                    echo "<br>";
                    $success = False;
                }
            }
        }

        function printResult($result) { //prints results from a select statement
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>About</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["USERID"] . "</td><td>" . $row["USERNAME"] . "</td><td>" . $row["ABOUT"] . "</td></tr>"; //or just use "echo $row[0]"
            }

            echo "</table>";
        }

        function connectToDB() {
            global $db_conn;

            // Your username is ora_(CWL_ID) and the password is a(student number). For example,
			// ora_platypus is the username and a12345678 is the password.
            $db_conn = OCILogon(USERNAME, PASSWORD, "dbhost.students.cs.ubc.ca:1522/stu");

            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Cannot connect to Database");
                $e = OCI_Error(); // For OCILogon errors pass no handle
                echo htmlentities($e['message']);
                return false;
            }
        }

        function disconnectFromDB() {
            global $db_conn;

            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        function handleUpdateRequest() {
            global $db_conn;

            $userID = $_POST['userID'];
            $newName = $_POST['newName'];
            $newAge = $_POST['newAge'];
            $newExp = $_POST['newExp'];
            $newEdu = $_POST['newEdu'];
            $newAbout = $_POST['newAbout'];

            // you need the wrap the old name and new name values with single quotations
            executePlainSQL("UPDATE Users SET username='" . $newName . "', age='" . $newAge . "', experience='" . $newExp . "', education='" . $newEdu . "', about='" . $newAbout . "' WHERE userID='" . $userID . "'");
            OCICommit($db_conn);
        }


        function handleInsertRequest() {
            global $db_conn;

            //Getting the values from user and insert data into the user table
            $tuple = array (
                ":bind1" => $_POST['insId'],
                ":bind2" => $_POST['insName'],
                ":bind3" => $_POST['insAge'],
                ":bind4" => $_POST['insExp'],
                ":bind5" => $_POST['insEdu'],
                ":bind6" => $_POST['insAbout']
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("insert into users values (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6)", $alltuples);
            OCICommit($db_conn);
        }

        function handleCountRequest() {
            global $db_conn;
            echo "<br>These are the registered users.:<br>";
            $result = executePlainSQL("SELECT * FROM users");
            printResult($result);
        }

        function handleViewApplicationsRequest() {
            global $db_conn;
            $result = executePlainSQL("SELECT * FROM applications");
            echo "<table>";
            echo "<tr><th>These are all the applications</th></tr>";
            echo "<tr><th>AppID</th><th>PosID</th><th>UserID</th><th>Success?</th></tr>";
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[5] . "</td></tr>";
            }

            echo "</table>";;
        }


        function appliedToAllRequest() {
            global $db_conn;
            $result = executePlainSQL("SELECT u.username from Users u WHERE NOT EXISTS (select p.posID from Position p WHERE NOT EXISTS (SELECT * from Applications a where a.userID = u.userID and p.posID = a.posID))
            ");
            echo "Users who applied to every job";
            printResult($result);
            echo '<hr>';
        }

        function handleDeleteRequest() {
            global $db_conn;
            $tuple = array (
                ":bind1" => $_POST['userID'],
            );
            $alltuples = array (
                $tuple
            );

            executeBoundSQL("Delete from users where userID = :bind1", $alltuples);
            OCICommit($db_conn);

        }

        function handleCodingRequest() {
            global $db_conn;
            $tbl = $_GET['selectionTable'];
            $attr = $_GET['selectionAttr'];
            $filter = $_GET['selectionFilter'];
            $var = "";
            if ($filter == "easy" || $filter == "medium" || $filter == "hard") {
                $var = "difficulty";
            } else {
                $var = approvedByAdmin;
            }

            if ($tbl == "behavioural" && ($attr == "qType" || $filter == "easy" || $filter == "medium" || $filter == "hard")) {
                echo "Please select attributes that are part of the selection table as identified by the options";
            } else {
                $result = executePlainSQL("SELECT  $attr FROM $tbl WHERE $var='" . $filter . "'");
                echo "<br>Retrieved data from '" . $tbl . "':<br>";
                echo "<table>";
                echo "<tr><th>Selected Attribute: '" . $attr . "'</th></tr>";
            
                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row[0] . "</td></tr>";
                }

                echo "</table>";
            }
        } 

        
        function handleCompanyQuestionRequest() {
            global $db_conn;
            $company = $_GET['company'];
            $result = executePlainSQL("SELECT DISTINCT coding.qTitle,company.name From coding
            INNER JOIN interviewcoding ON coding.codingQID = interviewcoding.codingQID
            INNER JOIN interview ON interviewcoding.intID = interview.intID 
            INNER JOIN applications ON interview.appID = applications.appID 
            INNER JOIN position ON applications.posID = position.posID 
            INNER JOIN company ON position.comID = company.comID
            Where company.name ='" . $company . "'");

            echo "<br>Retrieved Coding Questions asked at selected company:<br>";
            echo "<table>";
            echo "<tr><th>Question Title</th><th>Company</th></tr>";
            
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                //echo "<tr><td>" . $row["qTitle"] . "</td><td>" . $row["name"] . "</td></tr>";
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
            }

            echo "</table>";
        }

        function handleUserAttributesRequest() {
            global $db_conn;
            $first = $_GET['firstAttribute'];
            $sec = $_GET['secondAttribute'];
            $third = $_GET['thirdAttribute'];
            $result = executePlainSQL("SELECT $first, $sec, $third FROM Users");

            echo "<br>Selected User Attributes:<br>";
            echo "<table>";
            echo "<tr><th>$first</th><th>$sec</th><th>$third</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
            }
            echo "</table>";
        }

        function handleAvgSalaryRequest() {
            global $db_conn;
            $company = $_GET['company'];
            $result = executePlainSQL("SELECT avg(salary)
                                    FROM Position p, Company c
                                    WHERE c.comID = p.comID and c.name = '" . $company . "'
                                    GROUP BY c.name");

            echo "<br>Average Salary:<br>";
            echo "<table>";
            echo "<tr><th>$company</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td></tr>";
            }
            echo "</table>";
        }

        function handleAvgExpRequest() {
            global $db_conn;
            $result = executePlainSQL("SELECT age, avg(experience)
                                    FROM Users
                                    GROUP BY age
                                    Having avg(experience) > 
                                                        (Select avg(experience)
                                                        From Users)");

            echo "<br>Average experience for each age (with above average experience):<br>";
            echo "<table>";
            echo "<tr><th>Age</th><th>Experience</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
            }
            echo "</table>";
        }


        function handleNumAppspRequest() {
            global $db_conn;
            $bind1 = $_GET['companyName'];

            $result = executePlainSQL("SELECT c.name, p.title, count(a.appID) 
            from Position p, Company c, Applications a 
            where a.posID = p.posID 
            and p.comID = c.comID GROUP BY c.name, p.title 
            HAVING c.name = '$bind1'");

            echo "<br>Number of applications for given company is:<br>";
            echo "<table>";
            echo "<tr><th>Age</th><th>Experience</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
            }
            echo "</table>";
        }

        // HANDLE ALL POST ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('updateQueryRequest', $_POST)) {
                    handleUpdateRequest();
                } else if (array_key_exists('insertQueryRequest', $_POST)) {
                    handleInsertRequest();
                }else if (array_key_exists('insertQueryRequest', $_POST)) {
                    handleInsertRequest();
                }else if (array_key_exists('deleteUserRequest', $_POST)) {
                    handleDeleteRequest();
                }

                disconnectFromDB();
            }
        }


        // HANDLE ALL GET ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('countTuples', $_GET)) {
                    handleCountRequest();
                }
                if (array_key_exists('getCodingQuestions', $_GET)) {
                    handleCodingRequest();
                }
                if (array_key_exists('getCompanyQuestions', $_GET)) {
                    handleCompanyQuestionRequest();
                }
                if (array_key_exists('getUserAttributes', $_GET)) {
                    handleUserAttributesRequest();
                }
                if (array_key_exists('getAvgSalary', $_GET)) {
                    handleAvgSalaryRequest();
                }
                if (array_key_exists('getAvgExp', $_GET)) {
                    handleAvgExpRequest();
                }
                if (array_key_exists('getNumApps', $_GET)) {
                    handleNumAppspRequest();
                }
                if (array_key_exists('countAppliedToAll', $_GET)) {
                    appliedToAllRequest();
                }
                if (array_key_exists('viewApplications', $_GET)) {
                    handleViewApplicationsRequest();
                }
                disconnectFromDB();
            }
        }

		if (isset($_POST['updateSubmit']) || isset($_POST['insertSubmit']) || isset($_POST['deleteSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['countTupleRequest']) || isset($_GET['codingQRequest']) || 
            isset($_GET['companyQRequest']) || isset($_GET['projectionQueryRequest']) ||
            isset($_GET['avgSalaryRequest']) || isset($_GET['avgExpRequest']) || isset($_GET['numAppsRequest']) ||
            isset($_GET['appliedToAll']) || isset($_GET['viewApplicationsRequest'])) {
            handleGETRequest();
        }
		?>
	</body>
</html>