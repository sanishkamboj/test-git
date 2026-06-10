import express from "express";

const router = express.Router();

router.post("/users", async (req, res) => {
  const { name, email } = req.body;

  const user = await userService.createUser({ name, email });

  res.json({
    success: true,
    data: user,
  });
});

router.get("/users/:id", async (req, res) => {
  const user = await userService.findById(req.params.id);

  if (!user) {
    return res.status(404).json({ success: false, message: "Not found" });
  }

  res.json({ success: true, data: user });
});

export default router;
