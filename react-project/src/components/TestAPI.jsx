import React, { useEffect } from "react";
import axios from "axios";

const TestApi = () => {
  useEffect(() => {
    axios
      .get("/api/test.php?name=React")
      .then((response) => {
        console.log("Response from backend:", response.data);
      })
      .catch((error) => {
        console.error("Error calling backend:", error);
      });
  }, []);

  return (
    <div>
      <h1>Testing Backend</h1>
      <p>Open your browser console to see the response.</p>
    </div>
  );
};

export default TestApi;
