<!DOCTYPE html>
<html lang="en">
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="table.css">
        <script src="script/absenc.js" type="text/javascript">

        </script>

  
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Employees</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>CNE</th>
                            <th>Date</th>


                            <th>date debut</th>
                            <th>date fin</th>
                            <th>ETAT</th>
                            <th>justufication</th>
                            <th>libelle</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tableaux">



                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Add Absence</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>CEN</label>
                                <input type="text" class="form-control" id="cen" required>
                            </div>
                            <div class="form-group">
                                <label>matiere</label><br>
                                <select id="matieres">

                                </select>
                            </div>
                            <div class="form-group">
                                <label>date</label>
                                <input type="date" class="form-control" id="date" required>
                            </div>
                            <div class="form-group">
                                <label>H_debut</label>
                                <input type="time" class="form-control" id="debut" required>
                            </div>		
                            <div class="form-group">
                                <label>H_fin</label>
                                <input type="time" class="form-control" id="fin" required>
                            </div>
                            <div class="form-group">
                                <label>Etat</label><br>
                                <input type="radio" name="justufiacation" value="justufier" id="js" required>justifie:<br><br>
                                <input type="radio" name="justufiacation"  value="non-justufie" id="nj" required>non-justufie
                            </div>
                            <div class="form-group">
                                <label>justufiacation</label>
                                <input type="file" class="form-control" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <button type="submit" class="btn btn-success ajouter" value="Add">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">modifier absence</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>CEN</label>
                                <input type="text" class="form-control cen"  required>
                            </div>
                            <div class="form-group">
                                <label>matiere</label><br>
                                <select class="matieres">

                                </select>
                            </div>
                            <div class="form-group">
                                <label>date</label>
                                <input type="date" class="form-control date"  required>
                            </div>
                            <div class="form-group">
                                <label>H_debut</label>
                                <input type="time" class="form-control debut"  required>
                            </div>		
                            <div class="form-group">
                                <label>H_fin</label>
                                <input type="time" class="form-control fin" required>
                            </div>
                            <div class="form-group">
                                <label>Etat</label><br>
                                <input type="radio" name="justufiacation" id='justo' value="justifie" >justifie:<br><br>
                                <input type="radio" name="justufiacation" id='njusto' value="non-justufie" >non-justufie
                            </div>
                            <div class="form-group">
                                <label>justufiacation</label>
                                <input type="file" class="form-control" required>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <input type="button" class=" btn-default" data-dismiss="modal" value="Cancel">
                            <button type="submit" class="modifier btn-success" value="Add">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">suppeimer absence</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <p>Are you sure you want to delete these Records?</p>
                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>

       

</html>                                		                            