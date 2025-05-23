<!-- DASHBOARD WIDGETS: Responsive, Bootstrap 5, Personal Task Manager -->
<div class="container-fluid px-0 mt-4">
  <div class="row g-4">
    <!-- Recent Tasks -->
    <div class="col-lg-6 col-md-12">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-header fw-bold bg-white border-0">Recent Tasks</div>
        <ul class="list-group list-group-flush recent-tasks-list">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Finish Dashboard UI
            <span class="badge bg-success rounded-pill">Completed</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Prepare Meeting Notes
            <span class="badge bg-warning text-dark rounded-pill">In Progress</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Plan Next Week
            <span class="badge bg-secondary rounded-pill">Pending</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- Productivity Chart -->
    <div class="col-lg-6 col-md-12">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-header fw-bold bg-white border-0">Productivity This Week</div>
        <div class="card-body">
          <canvas id="productivityChart" height="180"></canvas>
        </div>
      </div>
    </div>
    <!-- Upcoming Deadlines -->
    <div class="col-lg-6 col-md-12">
      <div class="card h-100 shadow-sm border-0 mt-4 mt-lg-0">
        <div class="card-header fw-bold bg-white border-0">Upcoming Deadlines</div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Submit Report
            <span class="badge bg-danger rounded-pill">Tomorrow</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Buy Groceries
            <span class="badge bg-info text-dark rounded-pill">3 days</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- Motivational Quote -->
    <div class="col-lg-6 col-md-12">
      <div class="card h-100 shadow-sm border-0 mt-4 mt-lg-0">
        <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
          <blockquote class="blockquote mb-0">
            <p class="fs-5">"Small steps every day lead to big results."</p>
            <footer class="blockquote-footer mt-2 text-secondary">Inspired by <cite title="Source Title">Unknown</cite></footer>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</div>