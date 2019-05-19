<html>
<br>
<style>
  th,td {
    padding: 5px;
    text-align: center;
  }
  table,th,td {
    border: 1px solid black;
    border-collapse: collapse;
  }
</style>
<table class="table" style="width:100%">
  <thead>
    <tr class="table-primary">
      <th scope="row">Time</th>
      <th colspan="2" scope="row">Monday</th>
      <th colspan="2" scope="row">Tuesday</th>
      <th colspan="2" scope="row">Wednesday</th>
      <th colspan="2" scope="row">Wednesday</th>
      <th colspan="2" scope="row">Friday</th>
      <th colspan="2" scope="row">Sunday</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-info">
      <th scope="row"></th>
      <td>001</td>
      <td>002</td>
      <td>001</td>
      <td>002</td>
      <td>001</td>
      <td>002</td>
      <td>001</td>
      <td>002</td>
      <td>001</td>
      <td>002</td>
      <td>001</td>
      <td>002</td>
    </tr>
    <?php $this->load->model('Time_Model'); ?>
    <tr class="table-info">
      <th scope="row">2pm - 3pm</th>
      <td><?php $this->Time_Model->printSlot("Monday", "2pm - 3pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Monday", "2pm - 3pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Tuesday", "2pm - 3pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Tuesday", "2pm - 3pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Wednesday", "2pm - 3pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Wednesday", "2pm - 3pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Thursday", "2pm - 3pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Thursday", "2pm - 3pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Friday", "2pm - 3pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Friday", "2pm - 3pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Sunday", "2pm - 3pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Sunday", "2pm - 3pm", 2); ?> </td>
    </tr>
    <tr class="table-info">
      <th scope="row">3pm - 4pm</th>
      <td><?php $this->Time_Model->printSlot("Monday", "3pm - 4pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Monday", "3pm - 4pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Tuesday", "3pm - 4pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Tuesday", "3pm - 4pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Wednesday", "3pm - 4pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Wednesday", "3pm - 4pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Thursday", "3pm - 4pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Thursday", "3pm - 4pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Friday", "3pm - 4pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Friday", "3pm - 4pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Sunday", "3pm - 4pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Sunday", "3pm - 4pm", 2); ?> </td>
    </tr>
    <tr class="table-info">
      <th scope="row">4pm - 5pm</th>
      <td><?php $this->Time_Model->printSlot("Monday", "4pm - 5pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Monday", "4pm - 5pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Tuesday", "4pm - 5pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Tuesday", "4pm - 5pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Wednesday", "4pm - 5pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Wednesday", "4pm - 5pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Thursday", "4pm - 5pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Thursday", "4pm - 5pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Friday", "4pm - 5pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Friday", "4pm - 5pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Sunday", "4pm - 5pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Sunday", "4pm - 5pm", 2); ?> </td>
    </tr>
    <tr class="table-info">
      <th scope="row">5pm - 6pm</th>
      <td><?php $this->Time_Model->printSlot("Monday", "5pm - 6pm", 1); ?></td>
      <td><?php $this->Time_Model->printSlot("Monday", "5pm - 6pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Tuesday", "5pm - 6pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Tuesday", "5pm - 6pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Wednesday", "5pm - 6pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Wednesday", "5pm - 6pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Thursday", "5pm - 6pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Thursday", "5pm - 6pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Friday", "5pm - 6pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Friday", "5pm - 6pm", 2); ?> </td>
      <td><?php $this->Time_Model->printSlot("Sunday", "5pm - 6pm", 1); ?> </td>
      <td><?php $this->Time_Model->printSlot("Sunday", "5pm - 6pm", 2); ?> </td>
    </tr>
  </tbody>
</table>


</html>