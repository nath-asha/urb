# urb\urban-planning-website/
│
├── index.html            # Home page
├── contact.html          # Contact page
├── resources.html        # Resources page
├── projects.html         # Projects page
├── maps.html             # Maps page
├── feedback.html         # Feedback page
│
├── css/
│   ├── styles.css        # Global CSS styles
│   └── responsive.css    # Responsive CSS styles
│
├── js/
│   ├── script.js         # Global JavaScript file
│   └── data.js           # JavaScript file for data manipulation
│
├── images/
│   ├── map.jpg           # Image files
│   └── ...
│
├── db/
│   ├── urban-planning-db.sql   # SQL file for creating the database schema
│   ├── data.sql          # SQL file for populating the database with sample data
│   └── ...
│
├── server/
│   ├── app.js            # Express.js server
│   ├── controllers/      # Controller logic (e.g., routes)
│   │   ├── projectController.js
│   │   ├── feedbackController.js
│   │   └── ...
│   ├── models/           # Database models (e.g., using Sequelize ORM)
│   │   ├── Project.js
│   │   └── ...
│   ├── routes/           # API routes (e.g., RESTful routes)
│   │   ├── projectRoutes.js
│   │   ├── feedbackRoutes.js
│   │   └── ...
│   ├── config/           # Database configuration (e.g., database connection settings)
│   │   └── db.js
│   ├── middleware/       # Middleware functions (e.g., for authentication)
│   │   └── ...
│   ├── public/           # Static files served by the server (e.g., images, CSS, JS)
│   │   └── ...
│   └── utils/            # Utility functions
│       └── ...
│
└── README.md
