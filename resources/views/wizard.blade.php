<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wizard Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <h1>Wizard Form</h1>

        <div class="wizard-container">

            <ul class="nav nav-pills nav-justified wizard" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#step-1">Paso 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#step-2">Paso 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#step-3">Paso 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#step-4">Paso 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#step-5">Paso 5</a>
                </li>
            </ul>

            <div class="tab-content">

                <div class="tab-pane active" id="step-1">
                    <h2 class="mb-3">Paso 1: Datos del proyecto</h2>

                    <div class="mb-3">
                        <label for="project-name">Nombre del proyecto</label>
                        <input type="text" class="form-control" id="project-name" placeholder="Nombre del proyecto">
                    </div>

                    <div class="mb-3">
                        <label for="project-sector">Sector</label>
                        <input type="text" class="form-control" id="project-sector" placeholder="Sector">
                    </div>

                    <div class="mb-3">
                        <label for="project-company">Empresa</label>
                        <input type="text" class="form-control" id="project-company" placeholder="Empresa">
                    </div>

                    <div class="mb-3">
                        <label for="project-target">Objetivo</label>
                        <input type="text" class="form-control" id="project-target" placeholder="Objetivo">
                    </div>

                    <div class="mb-3">
                        <label for="project-range">Alcance</label>
                        <input type="text" class="form-control" id="project-range" placeholder="Alcance">
                    </div>

                    <button class="btn btn-primary mt-3" id="next-step">Siguiente</button>
                </div>

                <div class="tab-pane" id="step-2">
                    <h2 class="mb-3">Paso 2: Nudos críticos</h2>

                    <div class="mb-3">
                        <input type="checkbox" id="critical-point-1"> Nudo crítico 1
                    </div>

                    <div class="mb-3">
                        <input type="checkbox" id="critical-point-2"> Nudo crítico 2
                    </div>

                    <div class="mb-3">
                        <input type="checkbox" id="critical-point-3"> Nudo crítico 3
                    </div>

                    <button class="btn btn-primary mt-3" id="next-step">Siguiente</button>
                </div>
                <div class="tab-pane" id="step-3">
                    <h2 class="mb-3">Paso 3: Cronograma</h2>

                    <div class="mb-3">
                        <label for="tasks">Tareas</label>
                        <input type="text" class="form-control" id="tasks" placeholder="Tareas">
                    </div>

                    <div class="mb-3">
                        <label for="milestones">Hitos</label>
                        <input type="text" class="form-control" id="milestones" placeholder="Hitos">
                    </div>

                    <div class="mb-3">
                        <label for="deadlines">Fechas de vencimiento</label>
                        <input type="text" class="form-control" id="deadlines"
                            placeholder="Fechas de vencimiento">
                    </div>

                    <button class="btn btn-primary mt-3" id="next-step">Siguiente</button>
                </div>

                <div class="tab-pane" id="step-4">
                    <h2 class="mb-3">Paso 4: Contrataciones</h2>

                    <div class="mb-3">
                        <label for="contractors">Contratistas</label>
                        <input type="text" class="form-control" id="contractors" placeholder="Contratistas">
                    </div>

                    <div class="mb-3">
                        <label for="amounts">Montos</label>
                        <input type="text" class="form-control" id="amounts" placeholder="Montos">
                    </div>

                    <button class="btn btn-primary mt-3" id="next-step">Siguiente</button>
                </div>

                <div class="tab-pane" id="step-5">
                    <h2 class="mb-3">Paso 5: Análisis de opciones</h2>

                    <div class="mb-3">
                        <label for="analysis">Análisis</label>
                        <textarea class="form-control" id="analysis" rows="3" placeholder="Análisis"></textarea>
                    </div>

                    <button class="btn btn-primary mt-3" id="submit">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/wizard.js"></script>
</body>

</html>
