    <main>
      <?php
        include 'content/includes/connectdb.inc.php';
        $sql = "SELECT * FROM users";
        $result = $db->query($sql);
      ?>
      <script type="text/javascript">
        function createUser() {
          $("#modal-create").modal('show');
        }
      </script>
      <div class="container">
        <button onclick="createUser()" class="btn btn-primary">Create User</button>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Username</th>
              <th scope="col">Name</th>
              <th scope="col">Lastname</th>
              <th scope="col">rank</th>
              <th scope="col">Manage</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($result as $row) {
              echo "<tr>";
              echo "<td>" . $row["id"] . "</td>";
              echo "<td>" . $row["user"] . "</td>";
              echo "<td>" . $row["name"] . "</td>";
              echo "<td>" . $row["lastname"] . "</td>";
              echo "<td>" . $row["rank"] . "</td>";
              ?>
              <td> <a class="btn btn-primary" href="#">Edit</a> </td>
              <?php
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </main>

    <div class="modal fade" id="modal-create">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="index.php?p=adduser" method="post">
              <?php include 'content/pages/user/input.php'; ?>
              <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
