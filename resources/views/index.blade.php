<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson Planning</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inria Serif', serif;
        }

        .fixed-label-width {
            width: 130px;
            min-width: 130px;
        }

        .form-control {
            background-color: #D3D3D3;
            border-radius: 0; 
        }

    </style>
</head>
<body>
<div class="row justify-content-center pt-4">
    <div class="col-md-6 d-flex flex-column align-items-center text-center">
        <img src="assets/logo.jpg" class="shadow-lg mb-2" alt="Responsive image" style="width: 70px; height: 70px;">
        <h3 class="p-0 m-0 text-nowrap fw-bold">Athang Training Institute</h3>
        <h5 class="fst-italic text-secondary p-0 m-0">"Academy for Skills development and work skill enhancement"</h5>
    </div>
</div>
<hr class="border-3 m-1" style="border-color: black;">

<div class="container mt-3">
    <h3 class="text-center mb-4 fw-bold">Lesson Plan</h3>
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <form>
                <div class="row mb-4">
                    <div class="col-md-6 d-flex align-items-center">
                        <label for="course-title" class="form-label mb-0 me-3 w-auto fixed-label-width fw-bold" style="white-space: nowrap;">Course Title</label>
                        <input type="text" class="form-control flex-grow-1" id="course-title" placeholder="Enter Course Title">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <label for="nc-level" class="form-label mb-0 me-3 w-auto fw-bold" style="white-space: nowrap;">BQF Level</label>
                        <input type="text" class="form-control flex-grow-1" id="nc-level" placeholder="Enter NC Level">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6 d-flex align-items-center">
                        <label for="module-code" class="form-label mb-0 me-3 w-auto fixed-label-width fw-bold" style="white-space: nowrap;">Module Code</label>
                        <input type="text" class="form-control flex-grow-1" id="module-code" placeholder="Enter Module Code">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <label for="duration" class="form-label mb-0 me-3 w-auto fw-bold" style="white-space: nowrap;">Duration</label>
                        <input type="text" class="form-control flex-grow-1" id="duration" placeholder="Enter Duration">
                    </div>
                </div>

                <!-- Single Column Fields -->
                <div class="row mb-4">
                    <div class="col-md-12 d-flex align-items-center">
                        <label for="module-title" class="form-label mb-0 me-3 w-auto fixed-label-width fw-bold" style="white-space: nowrap;">Module Title</label>
                        <input type="text" class="form-control flex-grow-1" id="module-title" placeholder="Enter Module Title">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12 d-flex align-items-center">
                        <label for="learning-outcome" class="form-label mb-0 me-3 w-auto fixed-label-width fw-bold" style="white-space: nowrap;">Learning Outcome</label>
                        <input type="text" class="form-control flex-grow-1" id="learning-outcome" placeholder="Enter Learning Outcome">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12 d-flex align-items-center">
                        <label for="skill-task-topic" class="form-label mb-0 me-3 w-auto fixed-label-width fw-bold" style="white-space: nowrap;">Skill/Task/Topic</label>
                        <input type="text" class="form-control flex-grow-1" id="skill-task-topic" placeholder="Enter Skill/Task/Topic">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <label for="tpo" class="form-label mb-2 w-auto fixed-label-width fw-bold" style="white-space: nowrap;">Terminal Performance Objective</label>
                        <textarea class="form-control" id="tpo" rows="4" placeholder="(Note: Write narrative statement extracted from TPO of Task Sheet)"></textarea>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12 d-flex align-items-center justify-content-between">
                        <label for="enabling-objectives" class="form-label mb-4 w-auto fixed-label-width fw-bold" style="white-space: nowrap;">Enabling Objectives (Related Knowledge)</label>
                        <button type="button" class="btn btn-danger">Add</button>
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" id="enabling-objectives" rows="4" placeholder="By the end of the lesson learners will be able to:"></textarea>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center align-items-center">
        <div class="w-75 bg-light p-4">
            <div class="mb-3">
                <label for="introduction" class="form-label fw-bold">Introduction</label>
                <textarea id="introduction" rows="2" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="main-body" class="form-label fw-bold">Main Body</label>
                <textarea id="main-body" rows="2" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="conclusion" class="form-label fw-bold">Conclusion</label>
                <textarea id="conclusion" rows="2" class="form-control"></textarea>
            </div>

            <div class="row mb-3">
                <div class="col-md-8">
                    <label for="methods" class="form-label fw-bold">How (Methods/Media)</label>
                    <textarea id="methods" rows="2" class="form-control"></textarea>
                </div>
                <div class="col-md-4">
                    <label for="who" class="form-label fw-bold">Who (T/L)</label>
                    <textarea id="who" rows="2" class="form-control"></textarea>
                </div>
            </div>

            <div class="mb-3">
                <label for="duration" class="form-label fw-bold">Duration (Min.)</label>
                <input id="duration" type="number" class="form-control">
            </div>

            <div class="mb-3">
                <label for="question" class="form-label fw-bold">Question</label>
                <textarea id="question" rows="2" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="projects" class="form-label fw-bold">Projects/Problem</label>
                <textarea id="projects" rows="2" class="form-control"></textarea>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-center mt-4 mb-4">
    <button class="btn" style="background-color: #dc3545; color: white; width: 500px; border-radius: 0; border: none;">Submit</button>
</div>
</body>
</html>

