<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accident Report Landing Page</title>
    <style>
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        form {
            max-width: 600px;
            margin: auto;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
        }
        
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h1>Accident Report Form</h1>

    <form action="submit_report.php" method="post" enctype="multipart/form-data">
        <!-- Accident Details -->
        <label for="incident_date">Incident Date:</label>
        <input type="date" id="incident_date" name="incident_date" required>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <!-- Attachments -->
        <label for="attachments">Attach Documents (if any):</label>
        <input type="file" id="attachments" name="attachments[]" multiple>

        <!-- Submit Button -->
        <button type="submit">Submit Report</button>
    </form>

</body>
</html>
