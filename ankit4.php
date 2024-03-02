<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Get register your project in project-hub and share it with other people for a betterment of academics system" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Register your Unique Projects Idea</title>
</head>

<body>
    <img src="image/icons8-book-64 (1).png" alt="book image" />
    <div class="project-register">
        <h1>Project Details</h1>
        <div>
            <label for="title">Project Title :</label>
            <input type="text"  class="form-control"name="title" id="title" placeholder="Title" />
        </div>
        <div>
            <label for="problemstate">Problem Statement :</label>
            <input type="text"  class="form-control"name="problemstate" id="problemstate" placeholder="Statement" />
        </div>
        <div>
            <label for="projectobj">Project Objective :</label>
            <input type="text"  class="form-control"name="projectobj" id="projectobj" placeholder="Objective" />
        </div>
        <div>
            <label for="category">Project Category :</label>
            <select name="category"  class="form-control"id="category">
                <option value="">Select Your Project Category</option>
                <option value="software">Software</option>
                <option value="hardware">Hardware</option>
                <option value="model">Model</option>
            </select>
        </div>
        <div>
            <label for="type">Project Type :</label>
            <select name="type" class="form-control" id="type">
                <option value="">Select Your Project Type</option>
                <option value="Web-Development">Web-Development </option>
                <option value="Mobile App Development">Mobile App Development</option>
                <option value="Destop Application">Destop Application</option>
                <option value="Game Development">Game Development</option>
                <option value="Machine Learning & AI">Machine Learning & AI</option>
                <option value="Cloud Computing">Cloud Computing</option>
                <option value="Software Security">Software Security</option>
                <option value="Database Management">Database Management</option>
                <option value="Electronic Prototype">Electronic Prototype</option>
                <option value="IOT device">IOT device</option>
                <option value="Embedded System">Embedded System</option>
                <option value="Robotics">Robotics</option>
                <option value="Product Design & development">Product Design & development</option>
            </select>
        </div>
        <div>
            <label for="domain">Project Domain :</label>
            <select name="domain"  class="form-control" id="domain">
                <option value="">Select your Project Domain</option>
                <option value="Smart Education">Smart Education</option>
                <option value="Blockchain & Cybersecurity">Blockchain & Cybersecurity</option>
                <option value="Clean & Green technology">Clean & Green technology</option>
                <option value="Smart Automation">Smart Automation</option>
                <option value="Helth-Tech">Helth-Tech</option>
                <option value="Disaster Management">Disaster Management</option>
                <option value="Agriculture & Foodtech">Agriculture & Foodtech</option>
                <option value="Robotics & Drones">Robotics & Drones</option>
                <option value="Smart Vechiles">Smart Vechiles</option>
                <option value="Fitness & Sports">Fitness & Sports</option>
                <option value="Travel & Tourism">Travel & Tourism</option>
                <option value="Games">Games</option>
            </select>
        </div>
        <div>

            <label for="comment">Describe your Project in detail :</label>
            <textarea name="comment" class="form-control" rows="4" cols="50">
          </textarea>
        </div>
        <div>
            <label for="file">Project Report :</label>
            <input type="file"  class="form-control" id="file">

        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</body>

</html>