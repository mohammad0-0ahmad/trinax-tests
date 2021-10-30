import express from "express";
import middlewares from "./src/middlewares";
import routes from "./src/routes";

const app = express();
const port = 3001;

middlewares(app);
routes(app);

app.listen(port, () => {
  return console.log(`Server is listening on ${port}`);
});
