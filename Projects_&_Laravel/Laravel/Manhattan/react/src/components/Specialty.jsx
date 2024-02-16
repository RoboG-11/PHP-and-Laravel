import Button from "react-bootstrap/Button";
import Card from "react-bootstrap/Card";
import { Link } from "react-router-dom";
export const Specialty = ({ specialty }) => {
  const { id, speciality_name, description } = specialty;
  return (
    <Card key={specialty.id} style={{ width: "18rem" }}>
      <Card.Img variant="top" src="holder.js/100px180" />
      <Card.Body>
        <Card.Title>{speciality_name}</Card.Title>
        <Card.Text>{description}</Card.Text>
        <Link to={`/specialties/${id}/${encodeURIComponent(speciality_name)}`}>
          <button className="btn btn-block">Go somewhere</button>
        </Link>
      </Card.Body>
    </Card>
  );
};
