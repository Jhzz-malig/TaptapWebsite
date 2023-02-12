<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>

      <form action="add" method="post" style="margin-top: 7%">
      @csrf
        <h1>Sign Up</h1>
        <fieldset>
          <legend><span class="number">1</span>Student Information</legend>
          <label for="name">Name:</label>
          <input type="text" placeholder="name" name="name">
          
          <label for="email">School Email:</label>
          <input type="text" placeholder="email" name="email">

          <label for="studentid">Student ID:</label>
          <input type="int" placeholder="studentid" name="studentid">

        <label for="department">Department:</label>
        <select placeholder="department" name="department">
          <optgroup label="Web">
            <option value="ccs">College of Computer Studies</option>
            <option value="cas">College of Arts and Sciences</option>
            <option value="educ">College of Education and Criminology</option>
            <option value="coc">College of Criminology</option>
            <option value="ceaa">College of Enginnering Architecure and Avitation</option>
            <option value="cba">College of Business and Accountancy</option>
            <option value="cihm">College of International Hospitality Manegment</option>
            <option value="cme">College of Maritime Education</option>
            <option value="be">Basic Education</option>
          </optgroup>
        </select>

            <label for="RFID">RFID:</label>
          <input type="varchar" placeholder="RFID" name="RFID">
        
        <button type="submit">Submit</button>
      </form>
    </body>
</html>