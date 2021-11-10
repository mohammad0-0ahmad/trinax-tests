import { Express } from "express";

export default (app: Express) => {
  app.get("/", (req, res) => {
    res.send("Welcome to node.");
  });
};
