# Todo:

_cell breakpoints_

small-(n) medium-(n) large-(n)

---

_media queries breakpoints_

/_ Small only _/
@media screen and (max-width: 39.9375em) {}

/_ Medium and up _/
@media screen and (min-width: 40em) {}

/_ Medium only _/
@media screen and (min-width: 40em) and (max-width: 63.9375em) {}

/_ Large and up _/
@media screen and (min-width: 64em) {}

/_ Large only _/
@media screen and (min-width: 64em) and (max-width: 74.9375em) {}

---

_variable names_

for post use posts ($posts as $row)

for views use pages ($pages as $row)

---

$this->session->set_flashdata('success', 'New user has been added!');

---

join table CI

$this->db->select('\*');
$this->db->from('table1'); // this is first table name
$this->db->join('table2', 'table2.id = table1.id'); // this is second table name with both table ids
$query = $this->db->get();
return $query->result();
