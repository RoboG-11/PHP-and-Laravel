import { useState, useEffect } from "react";
import axiosClient from "../../axios-client";
import Button from "react-bootstrap/Button";
import Card from "react-bootstrap/Card";

export const Users = () => {
  const [users, setUsers] = useState([]);

  useEffect(() => {
    axiosClient.get("/users").then(({ data }) => {
      setUsers(data.data);
    });
  }, []);

  return (
    <>
      <h1>Usuarios</h1>

      {users.map((user, index) => {
        const { name, rol, first_last_name } = user;

        return name ? (
          <Card key={index} style={{ width: "18rem" }}>
            <Card.Img variant="top" src="holder.js/100px180" />
            <Card.Body>
              <Card.Title>{name}</Card.Title>
              <Card.Text>{rol}</Card.Text>
              <Card.Text>{first_last_name}</Card.Text>
              <Button variant="primary">Go somewhere</Button>
            </Card.Body>
          </Card>
        ) : null;
      })}
    </>
  );
};
