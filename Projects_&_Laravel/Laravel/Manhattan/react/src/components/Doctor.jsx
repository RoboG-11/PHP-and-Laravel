import Button from "react-bootstrap/Button";
import Card from "react-bootstrap/Card";
import { Link } from "react-router-dom";
export const Doctor = ({ doctor }) => {
  const { personal_information, professional_license, education } = doctor;
  return (
    <Card key={personal_information.id} style={{ width: "18rem" }}>
      <Card.Img variant="top" src="holder.js/100px180" />
      <Card.Body>
        <Card.Title>{personal_information.name}</Card.Title>
        <Card.Text>{professional_license}</Card.Text>
        <Card.Text>{education}</Card.Text>
        <Link to={`/patient/doctors/${personal_information.id}`}>
          <Button variant="primary">Go somewhere</Button>
        </Link>
      </Card.Body>
    </Card>
  );
};
