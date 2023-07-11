<!DOCTYPE html>
<html>
<head>
    <title>University Online Courses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        .course {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }

        .course h2 {
            margin: 0;
        }

        .course p {
            margin-top: 5px;
        }

        .course a {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>University Online Courses</h1>

    <?php
    // Array containing course data (dummy data)
    $courses = array(
        array(
            'title' => 'Introduction to Programming',
            'instructor' => 'John Smith',
            'description' => 'Learn the basics of programming with this introductory course.',
            'link' => 'https://example.com/courses/intro-to-programming'
        ),
        array(
            'title' => 'Web Development 101',
            'instructor' => 'Jane Doe',
            'description' => 'Get started with web development and learn HTML, CSS, and JavaScript.',
            'link' => 'https://example.com/courses/web-development-101'
        ),
        array(
            'title' => 'Data Science Fundamentals',
            'instructor' => 'Mike Johnson',
            'description' => 'Explore the essentials of data science and learn data analysis techniques.',
            'link' => 'https://example.com/courses/data-science-fundamentals'
        )
    );

    // Loop through the courses array and display course information
    foreach ($courses as $course) {
        echo '<div class="course">';
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p><strong>Instructor:</strong> ' . $course['instructor'] . '</p>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<a href="' . $course['link'] . '">Enroll Now</a>';
        echo '</div>';
    }
    ?>

</body>
</html>
