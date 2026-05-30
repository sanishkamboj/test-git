export function validationRules() {
  return {
    name: {
      required: true,
      minLength: 2,
      message: "Enter the requester name.",
    },
    email: {
      required: true,
      format: "email",
      message: "Enter a valid email address.",
    },
    priority: {
      required: true,
      allowed: ["low", "normal", "high"],
      message: "Choose a priority.",
    },
    notes: {
      required: false,
      maxLength: 500,
      message: "Add helpful context for the support team.",
    },
  };
}
