<div class="page-header">
    <h1>{page_header}</h1>
    <button type="button" class="btn btn-lg btn-success">+ New User</button>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>Email</th>
                    <th>Fav Color</th>
                </tr>
            </thead>
            <tbody>
                {users}
                <tr>
                    <td>{name_full}</td>
                    <td>{dob}</td>
                    <td>{email}</td>
                    <td>{fav_color}</td>
                </tr>
                {/users}
            </tbody>
        </table>
    </div>
</div>
